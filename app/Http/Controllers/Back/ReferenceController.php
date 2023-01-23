<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Dinteraction;
use App\Hinteraction;
use App\HinteractionHasReference;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReferenceRequest;
use App\Reference;
use App\TemporaryData;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;



class ReferenceController extends Controller
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
        $referencees = Reference::find(2);
        $referencesWithRelations = Reference::with('user')->where('validated',1)->orderby("title")->get();
        return view('admin.references.index', compact('referencees', 'referencesWithRelations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.references.form_add_reference');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReferenceRequest $request)
    {
        if (Auth::user()->role_id <= 3) {
            $reference = new Reference;

            $reference->user_id = Auth::user()->id;
            $reference->title = $request->title;
            $reference->authors = $request->authors;
            $reference->year = $request->year;
            $reference->edition = $request->edition;
            $reference->url = $request->url;
            //for Admin or publisher
            if (Auth::user()->role_id <= 2) {
                //$reference->validated = 1;
                //dteu $message: comme nous avons plusieurs IFs imbriqués, le message sera conditionnel 
                //(Afin que les admins ou publish soient au courant que la reference n'est pas validé). (Avec un message pas défaut); 
                $message = "Nouvelle référence ajoutée avec succès."; 
                if($request->validated != null){
                    if($request->validated == 1){
                        $reference->validated = 1;
                    }
                }else{
                    $reference->validated = 0; 
                    $message = $message . " Elle doit être validé par un admin ou un publisher.";
                }
                $reference->save();
                Alert::success('Ok !', $message);
            }
            //Editor
            else if (Auth::user()->role_id == 3) {
                $reference->save();
                Alert::success('Attention !', 'Votre référence doit être validé par un admin ou un publisher avant d\'être actif.');
            }
        }
        //lectore or other
        else {
            Alert::error('Oups !', 'Vous n\'avez pas les autorisations nécessaires pour effectuer cette action.');
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($type, $id)
    {
        //id = hinteraction's or dinteraction's id
        //type = herb or drug to know if it is a dinteraction or hinteraction
        //Good way to use eloquent with normal & nested relashionship
        if ($type == "herb") {
            $interaction = Hinteraction::with('targets', 'herbs', 'forces', 'references.hinteractions.herbs', 'references.hinteractions.targets', 'references.hinteractions.forces')->find($id);
            $typeName = "Plante";
        }
        else {
            $interaction = Dinteraction::with('targets', 'drugs', 'forces', 'references.dinteractions.drugs', 'references.dinteractions.targets', 'references.dinteractions.forces')->find($id);
            $typeName = "DCI";
        }
        //dd($interaction->references->count());
        //temporary until we change DB or use another way for colors
        // switch ($interaction->forces->color) {
        //     case 'rouge': $interaction->forces->color="red"; break;
        //     case 'orange': $interaction->forces->color="#FFCC33"; break;
        //     case 'jaune': $interaction->forces->color="#FFD700"; break;
        //     case 'vert': $interaction->forces->color="#ccff99"; break;
        //     case 'mauve': $interaction->forces->color="#ffccff"; break;
        //     case 'brun': $interaction->forces->color="#EEE8AA"; break;
        //     case 'blanc': $interaction->forces->color="white"; break;
        // }
        $colorsList = [
            "rouge"     =>   "red",
            "orange"    =>  "#FFCC33",
            "jaune"     =>  "#FFD700",
            "vert"      =>  "#ccff99",
            "mauve"     =>  "#ffccff",
            "brun"      =>  "#EEE8AA",
            "blanc"     =>  "white"
        ];
        $interaction->forces->color = $colorsList[$interaction->forces->color];
        $referencesCount = $interaction->references->count();
        return view('admin.references.show', compact("interaction", "type", "typeName", "referencesCount", "colorsList"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reference $reference)
    {
        return view('admin.references.form_add_reference', ['reference' => $reference]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reference $reference)
    {
        //$reference->update($request->all());
        //Alert::success('Ok !', 'Votre référence a étè mise à jour avec succès');

        if (Auth::user()->role_id <= 3) {

            //for Admin or publisher
            if (Auth::user()->role_id <= 2) {
                //dteu $message: comme nous avons plusieurs IFs imbriqués, le message sera conditionnel 
                //(Afin que les admins ou publish soient au courant que le target n'est pas validé). (Avec un message pas défaut); 
                $message = 'Votre référence a été mise à jour avec succès.';
                $reference->update($request->all());
                if($request->validated != null){
                    if($request->validated == 1){
                        $reference->validated = 1;
                    }else if($request->validated == 0){
                        $reference->validated = 0;
                        $message = $message . " Elle est en attente de validation par un Administrateur ou un Publisher.";
                    }
                }else{
                    $reference->validated = 0;
                    $message = $message . " Elle est en attente de validation par un Administrateur ou un Publisher.";
                }
                $reference->save();
                Alert::success('Ok !', $message);
            }
            //Editor
            else if (Auth::user()->role_id == 3) {

                $original = ["title" => $reference->title,
                    "authors" => $reference->authors,
                    "year" => $reference->year,
                    "edition" => $reference->edition,
                    "url" => $reference->url ];
                $new = ["title" => $request->title,
                    "authors" => $request->authors,
                    "year" => $request->year,
                    "edition" => $request->edition,
                    "url" => $request->url ];
                $data = array_diff($new, $original);
                foreach ($data as $key => $value) {
                    $temporary = new TemporaryData;
                    $temporary->type_id = $reference->id;
                    $temporary->type_table = "references";
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
                Alert::success('Attention !', 'Votre référence doit être validé par un admin ou un publisher avant d\'être actif.');
            }
            return redirect(route('reference.index'));

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
    public function destroy(Reference $reference)
    {
        $reference->delete();
        return redirect(route('reference.index'));
    }

    public function alert(Reference $reference)
    {

        return view('admin.references.destroy', ['reference' => $reference]);
    }

    public function details($id)
    {
        $reference = Reference::findOrFail($id);

        return view('admin.references.show', $reference);
    }
}
