<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HinteractionRequest;
use App\Hinteraction;
use App\Target;
use App\User;
use App\Effect;
use App\Force;
use App\Reference;
use App\TemporaryData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;



class HinteractionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinteractionsWithRelations = Hinteraction::with('herbs', 'targets', 'user')->where('validated',1)->get();
        return view('admin.hinteractions.index', compact('hinteractionsWithRelations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $effects = Effect::all();
        $hinteraction = Hinteraction::all();
        $targets = Target::all();
        return view('admin.hinteractions.form_add_hinteraction', compact('targets', 'hinteractions', 'effects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HinteractionRequest $request)
    {
        $hinteraction = new Hinteraction;
        $effects = $request->effects;
        $references = $request->references;
        $hinteraction->user_id = Auth::user()->id;
        $hinteraction->name = $request->name;
        $hinteraction->drug_families_id = $request->drug_families_id;
        $hinteraction->route_id = $request->route_id;
        $hinteraction->atc_id = $request->atc_id;

        $hinteraction->save();
        $hinteraction->effects()->sync($effects, false);
        $hinteraction->references()->sync($references, false);

        Alert::success('Ok !', 'Herb target inserted successfully');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hinteraction $hinteraction)
    {
        $references = Reference::orderBy('title', 'ASC')->get();
        $forces = Force::orderBy('name', 'ASC')->get();
        $effects = Effect::orderBy('name', 'ASC')->get();
        $hinteractions = Hinteraction::all();



        return view('admin.hinteractions.form_add_hinteraction', compact('hinteraction', 'hinteractions', 'effects', 'forces', 'references'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hinteraction $hinteraction)
    {


        if (Auth::user()->role_id <= 3) {

            //for Admin or publisher
            if (Auth::user()->role_id <= 2) {
                //dteu $message: comme nous avons plusieurs IFs imbriqués, le message sera conditionnel 
                //(Afin que les admins ou publish soient au courant que le target n'est pas validé). (Avec un message pas défaut); 
                $message = 'Votre Hinteraction a été mise à jour avec succès.';
                $hinteraction->update($request->all());
                if($request->validated != null){
                    if($request->validated == 1){
                        $hinteraction->validated = 1;
                    }
                }else{
                    $hinteraction->validated = 0;
                    $message = $message . " Votre Interaction Plante doit être validé par un admin ou un publisher ";
                }
                $hinteraction->save();
                Alert::success('Ok !', $message);
            }
            //Editor
            else if (Auth::user()->role_id == 3) {

                $original = ["herb_id" => $hinteraction->herb_id,
                    "target_id" => $hinteraction->target_id,
                    //"effects" => $hinteraction->effects,
                    "force_id" => $hinteraction->force_id,
                    "notes" => $hinteraction->notes
                    //"references" => $hinteraction->references];
                ];

                $new = ["herb_id" => $request->herb_id,
                    "target_id" => $request->target_id,
                    //"effects" => $request->effects,
                    "force_id" => $request->force_id,
                    "notes" => $request->notes
                    //"references" => $request->references];
                ];

                $data = array_diff($new, $original);
                // print_r($original);
                // echo "original avant, new après <br>";
                // print_r($new);
                // dd($data);
                // die();
                foreach ($data as $key => $value) {
                    $temporary = new TemporaryData();
                    $temporary->type_id = $hinteraction->id;
                    $temporary->type_table = "hinteractions";
                    $temporary->type_field = $key;
                    if (!in_array($value, $original)) {
                        $temporary->original_value = $original[$key];
                        $temporary->new_value = $value;
                    }
                    $temporary->modified = true;
                    $temporary->author = Auth::user()->name . " " . Auth::user()->firstname;
                    $temporary->author_id = Auth::id();
                    $temporary->save();
                }
                Alert::success('Attention !', 'Votre Interaction Plante doit être validé par un admin ou un publisher avant d\'être actif.');
            }
            return redirect(route('hinteraction.index'));

        }
        //lector or other
        else {
            Alert::error('Oups !', 'Vous n\'avez pas les autorisations nécessaires pour effectuer cette action.');
        }

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hinteraction $hinteraction)
    {
        $hinteraction->delete();
        return redirect(route('hinteraction.index'));
    }

    public function alert(Hinteraction $hinteraction)
    {

        return view('admin.hinteraction.destroy', ['hinteraction' => $hinteraction]);
    }

    public function details($id)
    {
        $d = Hinteraction::findOrFail($id);

        return view('admin.hinteraction.show', $hinteraction);
    }
}
