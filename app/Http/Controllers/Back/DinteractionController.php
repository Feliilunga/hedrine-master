<?php

namespace App\Http\Controllers\Back;

use App\Drug;
use App\User;
use App\Force;
use App\Effect;
use App\Target;
use App\Reference;
use App\Dinteraction;
use App\TemporaryData;
use Illuminate\Http\Request;
use App\DinteractionHasEffect;
use App\DinteractionHasReference;
use App\Http\Requests\DrugRequest;
use Illuminate\Support\Facades\DB;
use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Requests\DinteractionRequest;



class DinteractionController extends Controller
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
        //$dinteractions = Dinteraction::all();
        $dinteractionsWithRelations = Dinteraction::with('drugs', 'targets', 'user')->where('validated',1)->get();
        return view('admin.dinteractions.index', compact('dinteractionsWithRelations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $effects = Effect::all();
        $dinteractions = Dinteraction::all();
        $targets = Target::all();
        return view('admin.dinteractions.form_add_dinteraction', compact('targets', 'dinteractions', 'effects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugRequest $request)
    {
        $drug = new Drug;
       // dd($drug);
        $drug->user_id = Auth::user()->id;
        $drug->name = $request->name;
        $drug->drug_families_id = $request->drug_families_id;
        $drug->route_id = $request->route_id;
        $request->validated ? $drug->validated = 1 : $drug->validated = 0;
        $drug->atc_level_4s_id = $request->atc_level_4s_id;

        $drug->save();
        $drug->targets()->sync($request->targets, false);
        Alert::success('Ok !', 'Nouveau DCI ajouté avec succès');

        $adminusers = User::with('roles')->where('role_id', '1')->get();
        // //dd($adminusers);
        foreach ($adminusers as $adm) {
            //     //Mail::to($adm)->send(new NewHerb($herb, $user));
            $adm->notify(new NewDrugNotification($drug));
        }
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
    public function edit(Dinteraction $dinteraction)
    {
        $references = Reference::orderBy('title', 'ASC')->get();
        $forces = Force::orderBy('name', 'ASC')->get();
        $effects = Effect::orderBy('name', 'ASC')->get();
        $dinteractions = Dinteraction::all();
        // dd($dinteractions);
        return view('admin.dinteractions.form_add_dinteraction', ['dinteraction' => $dinteraction], compact('dinteractions', 'effects', 'forces', 'references'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinteraction $dinteraction)
    {

        //old
        // $dinteraction->update($request->all());

        // Alert::success('Ok !', 'Votre Interaction drug a étè mis à jour avec succès');

        // return back();

        //new
        if (Auth::user()->role_id <= 3) {

            //for Admin or publisher

            if (Auth::user()->role_id <= 2) {
                //verfier
               // dd($dinteraction);
               //Mohammed A. : Permet savoir si DinteractionHasEffect existe deja en base de donné
                $id =    DinteractionHasEffect::select('id')->where("dinteraction_id",$dinteraction->id)->get();
                //Mohammed A. : Permet savoir si DinteractionHasReference existe deja dans DB
                $id_reference =    DinteractionHasReference::select('id')->where("dinteraction_id",$dinteraction->id)->get();

                //Mohammed si aucune DinteractonHasEffect deja été créer pas besoin de supprimer les créer directement
                if(sizeof($id) === 0){
                    if($request->effects !== null){
                    //nous parcourons les effet selon le nombre d'effet créé, il faudra ajouté dinteraction_has_effect dans la BD.
                    for($i = 0 ; $i< sizeof($request->effects); $i++){
                    $dinteractionHasEffect  = DB::insert('insert into dinteraction_has_effects (effect_id,dinteraction_id) values (?, ?)', [(int)$request->effects[$i], $dinteraction->id]);
                    //dd($dinteractionHasEffect);
                    // Trouver la d'intereaction dans la bd grace a son id pour pouvoir modifier les champ (Force_id,Target_id,drug_id_noteS_t)

                   //dd($dinteraction2,$request);

                    }
                }
                    $dinteraction2 =  Dinteraction::find($dinteraction->id);
                    $dinteraction2->update([
                        'force_id' => $request->force_id,
                        'target_id' => $request->target_id,
                        'drug_id' => $request->drug_id,
                        'notes' => $request->notes,
                        'target_id' => $request->target_id
                    ]);
                }else{//Si Nous trouvons un ligne dans la table DinteractionhasEffect,supprimer toute les ligne et les ajouté ensuite les nouvelles valeur
                     DinteractionHasEffect::where('dinteraction_id', $dinteraction->id)->delete();
                     if($request->effects !== null){
                     for($i = 0 ; $i< sizeof($request->effects); $i++){
                        // dd($request);
                        $dinteractionHasEffect  = DB::insert('insert into dinteraction_has_effects (effect_id,dinteraction_id) values (?, ?)', [(int)$request->effects[$i], $dinteraction->id]);

                }}
                // Trouver la d'intereaction dans la bd grace a son id pour pouvoir modifier les champ (Force_id,Target_id,drug_id_noteS_t)

                $dinteraction2 =  Dinteraction::find($dinteraction->id);
                //dd($dinteraction2,$request);
                 $dinteraction2->update([
                     'force_id' => $request->force_id,
                     'target_id' => $request->target_id,
                     'drug_id' => $request->drug_id,
                     'notes' => $request->notes,
                     'target_id' => $request->target_id
                 ]);
                }
                 //Mohammed A. Meme chose pour dinteraction_has_effect mais cette le faire pour dinteraction_has_references
                 if(sizeof($id_reference) === 0){
                     if($request->references !== null){
                    for($i = 0 ; $i< sizeof($request->references); $i++){
                        DB::insert('insert into dinteraction_has_references (reference_id,dinteraction_id) values (?, ?)', [(int)$request->references[$i], $dinteraction->id]);
                    }
                }

                }else{

                    DinteractionHasReference::where('dinteraction_id', $dinteraction->id)->delete();
                    //Mohammed A. J'avais mis request->references) === 0 et je devais mettre (request->references !== null) dans le if
                    if($request->references  !== null){
                    for($i = 0 ; $i< sizeof($request->references); $i++){
                        DB::insert('insert into dinteraction_has_references (reference_id,dinteraction_id) values (?, ?)', [(int)$request->references[$i], $dinteraction->id]);
                    }
                }
            }
            Alert::success('Ok !', 'Votre Interaction Drug a été mise à jour avec succès');
        }
            //Editor
            else if (Auth::user()->role_id == 3) {

                $original = ["drug_id" => $dinteraction->drug_id,
                    "target_id" => $dinteraction->target_id,
                    //"effects" => $hinteraction->effects,
                    "force_id" => $dinteraction->force_id,
                    "notes" => $dinteraction->notes
                    //"references" => $hinteraction->references];
                ];

                $new = ["drug_id" => $request->drug_id,
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
                    $temporary->type_id = $dinteraction->id;
                    $temporary->type_table = "dinteractions";
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
                Alert::success('Attention !', 'Votre Interaction Drug doit être validé par un admin ou un publisher avant d\'être actif.');
            }
            return redirect(route('dinteraction.index'));
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
    public function destroy(Dinteraction $dinteraction)
    {
        $dinteraction->delete();
        return redirect(route('dinteraction.index'));
    }

    public function alert(Dinteraction $dinteraction)
    {

        return view('admin.dinteractions.destroy', ['dinteraction' => $dinteraction]);
    }

    public function details($id)
    {
        $drug = Dinteraction::findOrFail($id);

        return view('admin.dinteractions.show', $drug);
    }
}
