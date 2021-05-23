<?php

namespace App\Http\Controllers;

use App\Post;
use App\Target;
use App\TargetType;
use App\Herb;
use App\Drug;
use App\Dinteraction;
use App\AtcLevel4Drug;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class TargetController extends Controller
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
        // $targets = Target::all();
        $posts  = Post::all();
        $herbs = Herb::all();
        $drugs = Drug::all();
        $targetsWithRelations = Target::with('targetype')->where('validated',1)->get();
        $targets = Target::with('targetype')->get();
        //these are for the filter chars search
        //dd($targets);
        $targetsChar = array();
        foreach (range('A', 'Z') as $char) {
            foreach ($targets as $n) {
                if ($n->name[0] === $char) {
                    $targetsChar[] = $char;
                }
            }
        }
        $resultChars = array_unique($targetsChar);
        in_array('A', $resultChars) ? $disable = null : $disable = 'disabled-char';

        return view('targets/index', compact('targets', 'targetsWithRelations', 'posts', 'drugs', 'herbs', 'targetsChar', 'resultChars', 'disable'));
    }

    //create function to get data by char
    //using this function i can get the char via a request and return data according the need ...
    /**
     * @param  string  $char
     * @return View
     */

    public function filterByChar($char)
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;

        $target =  Target::orderBy('name')->where('name', 'LIKE', $char . '%')->get();
        //dd($target);
        //dd($char);
        //this one used to add class on active char clicked
        $targetCharClicked = Target::where('name', 'LIKE', $char . '%')->get();
        $targetChar = $char;
        //dd($herbChar);
        //here just for test ...
        //dd($herbs);
        $targets = Target::with('targetype')->get();
        $targetsChars = array();
        foreach (range('A', 'Z') as $char) {
            foreach ($targets as $n) {
                if ($n->name[0] === $char) {
                    $targetsChars[] = $char;
                }
            }
        }
        $resultChars = array_unique($targetsChars);
        //dd($resultChars);
        in_array('A', $resultChars) ? $disable = null : $disable = 'disabled-char';

        return view('targets/index', compact('target', 'targetChar', 'disable', 'resultChars', 'lastHerb', 'numberOfTimes_herbForms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $target = Target::findOrFail($id);

        return view('targets/show', compact('target'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function edit(Target $target)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $target = Target::findOrFail($id);

        $target->user_id = Auth::user()->id;
        $target->target_type_id = $request->target_type_id;
        $target->name = $request->name;
        $target->long_name = $request->long_name;

        if ($target->validated == -1) {
            $target->validated = 0;
        }

        $target->save();

        return redirect()->route('userprofile.modifier_target')->with('success', 'La cible a bien étè modifiée. Elle est en entente pour etre valide par un admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Target  $target
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        //
    }
    public function details($id)
    {
        $target = Target::with(
            'dinteractions.drugs',
            'dinteractions.effects',
            'dinteractions.targets',
            'hinteractions.herbs',
            'hinteractions.effects',
            'hinteractions.targets'
        )->findOrFail($id);

        //dd($target);
        return view("targets/details", compact('target'));
    }

    //advanced search starts here

    public function oneToOne(Request $request)
    {

     //Evenor S. obtenir le nombre de plante
        if (!$request->atcId1 && $request->herbId1 && $request->drugId1){
            $nbrPlantes = [];
            $nbrDrugs = [];
            $retour = [];
            $compteurDrugs = 1;
            $compteurPlantes = 1;
            for ($i=1; $i < 6; $i++) {

                if (isset($request["herbId" . $i])){
                    array_push($nbrPlantes, $request["herbId" . $i]);
                    $compteurPlantes +=1;
                }
                if (isset($request["drugId" . $i])){
                    array_push($nbrDrugs, $request["drugId" . $i]);
                    $compteurDrugs +=1;
                }
               
            }
            $retour['nbrDrugs'] = $nbrDrugs;
            if($compteurPlantes > 2 && $compteurDrugs > 2) {
                $retour['mode_interaction'] = "multiPlantes&Drugs";
                //Evenor S. pour chaque plante faire une requete sql pour avoir les interactions avec le dci
                for ($i=1; $i < $compteurPlantes; $i++) {
                    for ($j=1; $j < $compteurDrugs; $j++) {

                        ${"references$i$j"} = DB::table('references')
                            ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                            ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                            ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                            ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                            ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                            ->where('dinteractions.route_drug_id', $nbrDrugs[$j-1])
                            ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                            ->get();

                        ${"result$i$j"} = DB::table('targets')
                            ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                            ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                            ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                            ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                            ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                            ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                            ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                            ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')

                            ->select('deffects.name as deffect', 'heffects.name as heffect', 'hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                            ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                            ->where('dinteractions.route_drug_id', $nbrDrugs[$j-1])
                            ->orderBy('hinteractions.force_id', 'ASC')
                            ->get();

                        
                        $idDrug = DB::table('route_drugs')->where('id', $nbrDrugs[$j-1])->pluck('drug_id');
                        $retour['idDrug'] = $idDrug;    
                        ${"drug$j"} =  DB::table('drugs')->where('id', $idDrug)->pluck('name');
                        $retour['drug'.$j] = ${"drug$j"};
                        $retour['result'.$i.$j] = ${"result$i$j"};
                        $retour['references'.$i.$j] = ${"references$i$j"};
                    }
                    ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                    $retour['herb'.$i] = ${"herb$i"};
                }
            }
            else if($compteurPlantes > 1 && $compteurDrugs > 1 && $compteurDrugs < $compteurPlantes) {
                $retour['mode_interaction'] = "multiPlantes";
                //Evenor S. pour chaque plante faire une requete sql pour avoir les interactions avec le dci
                for ($i=1; $i < $compteurPlantes; $i++) {

                    ${"references$i"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        ->where('dinteractions.route_drug_id', $request->drugId1)
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                        ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                        ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')

                        ->select('deffects.name as deffect', 'heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        ->where('dinteractions.route_drug_id', $request->drugId1)
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();


                    ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                    $retour['herb'.$i] = ${"herb$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                }
                $idDrug = DB::table('route_drugs')->where('id', $request->drugId1)->pluck('drug_id');
                $retour['idDrug'] = $idDrug;
                $drug = DB::table('drugs')->where('id', $idDrug)->pluck('name');
                $retour['drug'] = $drug;

            }
            else{
                $retour['mode_interaction'] = "multiDrugs";
                $test = Dinteraction::all();
                $retour['test'] = $test; 

                //Evenor S. pour chaque drug faire une requete sql pour avoir les interactions avec une plante
                for ($i=1; $i < $compteurDrugs; $i++) {

                    ${"references$i"} = DB::table('references')
                        //->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        //->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        //->where('hinteractions.herb_id', $request->herbId1)
                        // ->where('dinteractions.drug_id', $nbrDrugs[$i-1])
                        ->where('dinteractions.route_drug_id', $nbrDrugs[$i-1])
                        // ->where(function ($query) use($request, $nbrDrugs, $i) {
                        //     $query->where('hinteractions.herb_id','LIKE' , $request->herbId1)
                        //             ->orWhere('dinteractions.drug_id','LIKE' , $nbrDrugs[$i-1]);
                        //     })
                        // ->select(//'hinteractions.id as hId',
                        //     'dinteractions.id as dId',
                        //     //'hinteractions.herb_id as herb_Id',
                        //     'dinteractions.drug_id as drug_Id', 'references.*')
                        ->select(//'hinteractions.id as hId',
                            'dinteractions.id as dId',
                            //'hinteractions.herb_id as herb_Id',
                            'dinteractions.route_drug_id as drug_Id', 'references.*')
                        ->orderBy('references.year', 'DESC')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                        ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                        ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                        ->leftJoin('route_drugs as droute_drugs', 'droute_drugs.id', '=', 'dinteractions.route_drug_id')
                        // ->select('hinteractions.id as hId', 'dinteractions.id as dId',
                        //     'hinteractions.herb_id as herb_Id', 'dinteractions.drug_id as drug_Id',
                        //     'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes',
                        //     'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor',
                        //     'dforce.name as dForce', 'dforce.color as dColor',
                        //     'deffects.name as deffect', 'heffects.name as heffect')
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId',
                            'hinteractions.herb_id as herb_Id', 'dinteractions.route_drug_id as d_route_drug_id', 'droute_drugs.drug_id as drug_Id',
                            'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes',
                            'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor',
                            'dforce.name as dForce', 'dforce.color as dColor',
                            'deffects.name as deffect', 'heffects.name as heffect')
                        ->where('hinteractions.herb_id', $request->herbId1)
                        // ->where('dinteractions.drug_id', $nbrDrugs[$i-1])
                        ->where('dinteractions.route_drug_id', $nbrDrugs[$i-1])
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();

                    $idDrug = DB::table('route_drugs')->where('id', $request->drugId1)->pluck('drug_id');
                    $retour['idDrug'] = $idDrug;
                    ${"drug$i"} =  DB::table('drugs')->where('id', $idDrug)->pluck('name');
                    $retour['drug'.$i] = ${"drug$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                }
                $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');
                $retour['herb'] = $herb;
            }

            $retour['compteurPlantes'] = $compteurPlantes;
            $retour['compteurDrugs'] = $compteurDrugs;
            return response()->json($retour);
        }

        else if ($request->atcId1 || $request->atcSelectedIds) {
            $retour['mode_interaction'] = "atc";
            $nbrPlantes = [];
            $nbrDrugs = [];
            $tabId = [];
            $compteurDrugs = 1;
            $compteurPlantes = 1;
            $nbrDrugs = AtcLevel4Drug::with('drugs')->where('atc_level4_id', $request->atcId1)->get(['id', 'atc_level4_id', 'drug_id']);
            ;
            $retour['nbrDrugs'] = $nbrDrugs;
            $nbrDrug = array($nbrDrugs);
            $atcDrugs = DB::table('atc_level4_drugs')->where('atc_level4_id', $request->atcId1)->get(['id', 'atc_level4_id', 'drug_id']);
            $atcDrug = array($atcDrugs);
            $retour['atcDrug'] = $atcDrug;
            // return response()->json($atcDrug, 200);

            if($request->atcSelectedIds[0]=="all"){
                $compteurDrugs =count($nbrDrugs) + 1;
            }

            else{
                for ($i=0;$i<count($request->atcSelectedIds);$i++) {
                    $compteurDrugs +=1;
                }
            }
            
            for ($i=1; $i < 6; $i++) {


                if (isset($request["herbId" . $i])){
                    array_push($nbrPlantes, $request["herbId" . $i]);
                    $compteurPlantes +=1;
                }
                
            }
           
            //Félicien I. Pour chaque Drugs faire une interaction avec une plante
            
            if ($compteurDrugs>2 && $compteurPlantes==2) {
                for ($i=1; $i < $compteurDrugs; $i++) {

                    //  Ancien code que Félicien I. n'utilise plus
                    // ${"result$i"} = DB::table('targets')
                    //     ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                    //     ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                    //     ->join('drugs', 'drugs.id', '=', 'dinteractions.drug_id')
                    //     ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                    //     ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')

                    //     ->select('drugs.atc_level4_id as dAtcId', 'drugs.id as drugId', 'hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                    //     ->where('hinteractions.herb_id', $request->herbId1)
                    //     //->where('dinteractions.drug_id', $request->drugId1)
                    //     ->where('drugs.atc_level4_id', $request->atcId1)
                    //     ->orderBy('dinteractions.force_id', 'ASC')
                    //     ->orderBy('hinteractions.force_id', 'ASC')
                    //     ->orderBy('drugs.id', 'ASC')
                    //     ->get();



                    // ${"herb1"} =  DB::table('herbs')->where('id', $nbrPlantes[0])->pluck('name');
                    // $retour['herb1'] = ${"herb1"};
                    // $retour['result'.$i] = ${"result$i"};
                    //$retour['references'.$i] = ${"references$i"};



                    ${"references$i"} = DB::table('references')
                        
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->leftJoin('route_drugs as rdrug', 'rdrug.id', '=', 'dinteractions.route_drug_id')
                        //->where('hinteractions.herb_id', $request->herbId1)
                        // ->where('dinteractions.drug_id', $request->atcSelectedIds[$i-1])
                        // ->where('dinteractions.drug_id', $nbrDrug[0][$i-1]->id)
                        ->where('dinteractions.route_drug_id', $atcDrug[0][$i-1]->id)
                        ->select(//'hinteractions.id as hId',
                            'dinteractions.id as dId',
                            //'hinteractions.herb_id as herb_Id',
                            'rdrug.drug_id as drug_Id',
                            'references.*'
                        )
                        ->orderBy('references.year', 'DESC')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->join('route_drugs', 'route_drugs.id', '=', 'dinteractions.route_drug_id')
                        ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                        ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                        ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                        ->leftJoin('drugs as drogue', 'drogue.id', '=', 'route_drugs.drug_id')
                        ->select(
                            'hinteractions.id as hId',
                            'dinteractions.id as dId',
                            'hinteractions.herb_id as herb_Id',
                            'route_drugs.drug_id as drug_Id',
                            'hinteractions.notes as hNotes',
                            'dinteractions.notes as dNotes',
                            'targets.name as targetName',
                            'hforce.name as hForce',
                            'hforce.color as hColor',
                            'dforce.name as dForce',
                            'dforce.color as dColor',
                            'deffects.name as deffect',
                            'heffects.name as heffect'
                        )
                        ->where('hinteractions.herb_id', $request->herbId1)
                        // ->where('drugs.id', $request->atcSelectedIds[$i-1])
                        ->where('dinteractions.route_drug_id', $atcDrug[0][$i-1]->id)
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();


                    ${"drug$i"} =  DB::table('drugs')->where('id', $nbrDrug[0][$i-1]->drug_id)->pluck('name');
                    $retour['drug'.$i] = ${"drug$i"};
                    $retour['result'.$i] = ${"result$i"};
                    ${"herb"} =  DB::table('herbs')->where('id', $nbrPlantes[0])->pluck('name');
                    // $retour['herb7'] = ${"herb"};
                    $retour['references'.$i] = ${"references$i"};
                
                }
            
                $atc = DB::table('atc_level4s')->where('id', $request->atcId1)->pluck('name');
                $retour['atc'] = $atc;
                $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');
                $retour['herb'] = $herb;
                // $drugs_list = DB::table('drugs')->join('atc_level4_drugs', 'drugs.id', '=', 'atc_level4_drugs.drug_id')->where('atc_level4_drugs.id', $request->atcId1)->get(['drugs.id', 'drugs.name', 'atc_level4_drugs.id']);
                // $retour['drugs_list'] = $drugs_list;
                $retour['atcId1'] = $request->atcId1;
                $retour['atcSelectedIds'] = $request->atcSelectedIds;
            }

            // Félicien I. Dans le cas d'une interaction multiples entre plusieurs plantes et drugs
            if($compteurPlantes > 2 && $compteurDrugs > 2) {
                for ($i=1; $i < $compteurPlantes; $i++) {
                    for ($j=1; $j < $compteurDrugs; $j++) {

                        ${"references$i$j"} = DB::table('references')
                            ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                            ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                            ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                            ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                            ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                            // ->where('dinteractions.drug_id', $request->atcSelectedIds[$j-1])
                            ->where('dinteractions.route_drug_id', $atcDrug[0][$j-1]->id)
                            ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                            ->get();

                        ${"result$i$j"} = DB::table('targets')
                            ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                            ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                            ->join('route_drugs', 'route_drugs.id', '=', 'dinteractions.route_drug_id')
                            ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                            ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                            ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                            ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                            ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                            ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                            ->leftJoin('drugs as drogue', 'drogue.id', '=', 'route_drugs.drug_id')

                            ->select('deffects.name as deffect', 'heffects.name as heffect', 'hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                            ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                            // ->where('drugs.id', $request->atcSelectedIds[$j-1])
                            ->where('dinteractions.route_drug_id', $atcDrug[0][$j-1]->id)
                            ->orderBy('hinteractions.force_id', 'ASC')
                            ->get();

                        ${"drug$j"} =  DB::table('drugs')->where('id', $nbrDrug[0][$j-1]->drug_id)->pluck('name');
                        $retour['drug'.$j] = ${"drug$j"};
                        $retour['result'.$i.$j] = ${"result$i$j"};
                        $retour['references'.$i.$j] = ${"references$i$j"};
                    }
                    ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                    $retour['herb'.$i] = ${"herb$i"};
                }
            }

            // Félicien I. Dans le cas ou on a une interaction avec une ou plusieurs plante entre une seul drugs
            if($compteurPlantes > 1 && $compteurDrugs==2) {
                for ($i=1; $i < $compteurPlantes; $i++) {

                    ${"references$i"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        // ->where('dinteractions.drug_id',  $request->atcSelectedIds[0])
                        ->where('dinteractions.route_drug_id', $atcDrug[0][0]->id)
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->join('route_drugs', 'route_drugs.id', '=', 'dinteractions.route_drug_id')
                        ->join('dinteraction_has_effects', 'dinteractions.id', '=', 'dinteraction_has_effects.dinteraction_id')
                        ->join('effects as deffects', 'deffects.id', '=', 'dinteraction_has_effects.effect_id')
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')
                        ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                        ->leftJoin('drugs as drogue', 'drogue.id', '=', 'route_drugs.drug_id')

                        ->select('deffects.name as deffect', 'heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        // ->where('drugs.id', $request->atcSelectedIds[0])
                        ->where('dinteractions.route_drug_id', $atcDrug[0][0]->id)
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();


                    ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                    $retour['herb'.$i] = ${"herb$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                    
                }
                $drug = DB::table('drugs')->where('id', $atcDrug[0][0]->drug_id)->pluck('name');
                $retour['drug'] = $drug;

            }


            $retour['compteurPlantes'] = $compteurPlantes;
            $retour['compteurDrugs'] = $compteurDrugs;
            
            return response()->json($retour);
        }

        elseif ($request->herbId1) {
            $result = DB::table('hinteractions')
                ->leftJoin('targets', 'hinteractions.target_id', '=', 'targets.id')
                ->rightJoin('forces', 'hinteractions.force_id', '=', 'forces.id')
                ->where('hinteractions.herb_id', $request->herbId1)
                ->select('hinteractions.notes as notes', 'hinteractions.id as hId', 'targets.name as targetName', 'forces.name as forceName', 'forces.color as color')
                ->orderBy('hinteractions.force_id', 'ASC')
                ->get();
            $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');

            return response()->json(['result' => $result, 'herb' => $herb]);
        } elseif ($request->drugId1) {
            $result = DB::table('dinteractions')
                ->leftJoin('targets', 'dinteractions.target_id', '=', 'targets.id')
                ->rightJoin('forces', 'dinteractions.force_id', '=', 'forces.id')
                ->where('dinteractions.drug_id', $request->drugId1)
                ->select('dinteractions.notes as notes', 'dinteractions.id as dId', 'targets.name as targetName', 'forces.name as forceName', 'forces.color as color')
                ->orderBy('dinteractions.force_id', 'ASC')
                ->get();

            $drug = DB::table('drugs')->where('id', $request->drugId1)->pluck('name');

            return response()->json(['result' => $result, 'drug' => $drug]);
        }

    }

    // fonction pour obtenir les interaction entre les plantes et les mécanismes
    public function PlantToMechanism(Request $request)
    {

        if ($request->herbId1 && $request->mechanismId1){

            $nbrPlantes = [];
            $nbrMechanisms = [];
            $retour = [];
            $compteurMechanisms = 1;
            $compteurPlantes = 1;
            //Evenor S. obtenir le nombre de plante et de mécanisme
            for ($i=1; $i < 6; $i++) {

                if (isset($request["herbId" . $i])){
                    array_push($nbrPlantes, $request["herbId" . $i]);
                    $compteurPlantes +=1;
                }
                if (isset($request["mechanismId" . $i])){
                    array_push($nbrMechanisms, $request["mechanismId" . $i]);
                    $compteurMechanisms +=1;
                }
            }
           config()->set('database.connections.mysql.strict', false);
           // DB::statement("set session sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'");
            DB::reconnect();
            //recuperation des donné pour 1 plante et  mecanisme
            if($compteurPlantes == 2 && $compteurMechanisms == 2) {
                $retour['mode_interaction'] = "OneHerbOneMecanism";
                for ($i=1; $i < $compteurMechanisms; $i++) {

                    ${"references$i"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id', $request->herbId1)
                        ->where('dinteractions.target_id', $nbrMechanisms[$i-1])
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                    //Mohammed A. ajout de l'effet de la plante modification du select +  ajout 2 join
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')//Mohammed Ajout effet
                    ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')//Mohammed ajout effet
                    ->select('heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')

                        ->where('hinteractions.herb_id', $request->herbId1)
                        ->where('targets.id', $nbrMechanisms[$i-1])
                        ->where(function ($query) {
                            $query->where('targets.target_type_id', 'LIKE' , 2)
                                    ->orWhere('targets.target_type_id', 'LIKE' , 3);
                            })

                        ->groupBy('hinteractions.notes')
                        ->orderBy('dinteractions.force_id', 'ASC')
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();

                    if (isset(${"result$i"}[0]) && !(${"result$i"}[0] == null)) {
                        $truc = ${"result$i"}[0];
                        ${"drug$i"} =  DB::table('drugs')->where('id', $truc->dId)->pluck('name');
                    }
                    else {${"drug$i"} = "";}

                    ${"mechanism$i"} =  DB::table('targets')->where('id', $nbrMechanisms[$i-1])->pluck('name');
                    $retour['drug'.$i] = ${"drug$i"};
                    $retour['mechanism'.$i] = ${"mechanism$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                }
                $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');
                $retour['herb1'] = $herb;
            }
            //recuperation des donnée pour plusieurs plante et 1 mecanimse
            else if($compteurPlantes > 1 && $compteurMechanisms > 1 && $compteurMechanisms < $compteurPlantes && $compteurMechanisms == 2) {
                $retour['mode_interaction'] = "multiplantes";
                //Evenor S. pour chaque plante faire une requete sql pour avoir les interactions avec le dci
                for ($i=1; $i < $compteurPlantes; $i++) {

                    ${"references$i"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        ->where('dinteractions.target_id', $request->mechanismId1)
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                                  //Mohammed A. ajout de l'effet de la plante modification du select +  ajout 2 join
                    ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')//Mohammed Ajout effet
                    ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')//Mohammed ajout effet
                    ->select('heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')
                        ->where('hinteractions.herb_id', $nbrPlantes[$i-1])
                        ->where('targets.id', $request->mechanismId1)
                        ->where(function ($query) {
                            $query->where('targets.target_type_id', 'LIKE' , 2)
                                    ->orWhere('targets.target_type_id', 'LIKE' , 3);
                            })
                        ->groupBy('hinteractions.notes')
                        ->orderBy('dinteractions.force_id', 'ASC')
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();

                    if (isset(${"result$i"}[0]) && !(${"result$i"}[0] == null)) {
                        $truc = ${"result$i"}[0];
                        ${"drug$i"} =  DB::table('drugs')->where('id', $truc->dId)->pluck('name');
                    }
                    else {${"drug$i"} = "";}

                    ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                    $retour['herb'.$i] = ${"herb$i"};
                    $retour['drug'.$i] = ${"drug$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                }
                $mechanism = DB::table('targets')->where('id', $request->mechanismId1)->pluck('name');
                $retour['mechanism'] = $mechanism;

            }
            //Mohammed recuperation des donné pour plusieurs mecanisme et 1 plante
            else if($compteurPlantes > 1 && $compteurMechanisms > 1 && $compteurMechanisms > $compteurPlantes && $compteurPlantes == 2){
                $retour['mode_interaction'] = "multimechanisms";
                //Evenor S. pour chaque mechanism faire une requete sql pour avoir les interactions avec une plante

                for ($i=1; $i < $compteurMechanisms; $i++) {

                    ${"references$i"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id', $request->herbId1)
                        ->where('dinteractions.target_id', $nbrMechanisms[$i-1])
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                    //Mohammed A. ajout de l'effet de la plante modification du select +  ajout 2 join
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')//Mohammed Ajout effet
                    ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')//Mohammed ajout effet
                    ->select('heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')

                        ->where('hinteractions.herb_id', $request->herbId1)
                        ->where('targets.id', $nbrMechanisms[$i-1])
                        ->where(function ($query) {
                            $query->where('targets.target_type_id', 'LIKE' , 2)
                                    ->orWhere('targets.target_type_id', 'LIKE' , 3);
                            })

                        ->groupBy('hinteractions.notes')
                        ->orderBy('dinteractions.force_id', 'ASC')
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();

                    if (isset(${"result$i"}[0]) && !(${"result$i"}[0] == null)) {
                        $truc = ${"result$i"}[0];
                        ${"drug$i"} =  DB::table('drugs')->where('id', $truc->dId)->pluck('name');
                    }
                    else {${"drug$i"} = "";}

                    ${"mechanism$i"} =  DB::table('targets')->where('id', $nbrMechanisms[$i-1])->pluck('name');
                    $retour['drug'.$i] = ${"drug$i"};
                    $retour['mechanism'.$i] = ${"mechanism$i"};
                    $retour['result'.$i] = ${"result$i"};
                    $retour['references'.$i] = ${"references$i"};
                }
                $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');
                $retour['herb1'] = $herb;
            }
            // Mohammed Plusieurs plantes et mecanismeS
            //Reprndre a partir d'ici 09/03/2021
            else{
                $retour['mode_interaction'] = "multimechanismsHerb";

                //Evenor S. pour chaque mechanism faire une requete sql pour avoir les interactions avec une plante
                for ($i=1; $i < $compteurPlantes; $i++) {
                    for ($j=1; $j < $compteurMechanisms; $j++) {
                    ${"references$i$j"} = DB::table('references')
                        ->join('hinteraction_has_references', 'references.id', '=', 'hinteraction_has_references.reference_id')
                        ->join('dinteraction_has_references', 'references.id', '=', 'dinteraction_has_references.reference_id')
                        ->join('hinteractions', 'hinteractions.id', '=', 'hinteraction_has_references.hinteraction_id')
                        ->join('dinteractions', 'dinteractions.id', '=', 'dinteraction_has_references.dinteraction_id')
                        ->where('hinteractions.herb_id',$nbrPlantes[$i-1])
                        ->where('dinteractions.target_id', $nbrMechanisms[$j-1])
                        ->select('hinteractions.id as hId', 'dinteractions.id as dId', 'references.*')
                        ->get();


                    ${"result$i$j"} = DB::table('targets')
                        ->join('hinteractions', 'targets.id', '=', 'hinteractions.target_id')
                        ->join('dinteractions', 'targets.id', '=', 'dinteractions.target_id')
                        ->leftJoin('forces as hforce', 'hforce.id', '=', 'hinteractions.force_id')
                        ->leftJoin('forces as dforce', 'dforce.id', '=', 'dinteractions.force_id')
                    //Mohammed A. ajout de l'effet de la plante modification du select +  ajout 2 join
                        ->join('hinteraction_has_effects', 'hinteractions.id', '=', 'hinteraction_has_effects.hinteraction_id')//Mohammed Ajout effet
                    ->join('effects as heffects', 'heffects.id', '=', 'hinteraction_has_effects.effect_id')//Mohammed ajout effet
                    ->select('heffects.name as heffect','hinteractions.id as hId', 'dinteractions.id as dId', 'hinteractions.notes as hNotes', 'dinteractions.notes as dNotes', 'targets.name as targetName', 'hforce.name as hForce', 'hforce.color as hColor', 'dforce.name as dForce', 'dforce.color as dColor')

                    ->where('hinteractions.herb_id',$nbrPlantes[$i-1])
                    ->where('dinteractions.target_id', $nbrMechanisms[$j-1])
                        ->where(function ($query) {
                            $query->where('targets.target_type_id', 'LIKE' , 2)
                                    ->orWhere('targets.target_type_id', 'LIKE' , 3);
                            })

                        ->groupBy('hinteractions.notes')
                        ->orderBy('dinteractions.force_id', 'ASC')
                        ->orderBy('hinteractions.force_id', 'ASC')
                        ->get();

                    if (isset(${"result$i"}[0]) && !(${"result$i"}[0] == null)) {
                        $truc = ${"result$i"}[0];
                        ${"drug$i"} =  DB::table('drugs')->where('id', $truc->dId)->pluck('name');
                    }
                    else {${"drug$i"} = "";}

                    ${"mechanism$j"} =  DB::table('targets')->where('id', $nbrMechanisms[$j-1])->pluck('name');
                    $retour['mechanism'.$j] = ${"mechanism$j"};
                    $retour['drug'.$i] = ${"drug$i"};


                    $retour['result'.$i.$j] = ${"result$i$j"};
                    $retour['references'.$i.$j] = ${"references$i$j"};

                }

                ${"herb$i"} =  DB::table('herbs')->where('id', $nbrPlantes[$i-1])->pluck('name');
                $retour['herb'.$i] = ${"herb$i"};
            }



            }

            $retour['compteurPlantes'] = $compteurPlantes;
            $retour['compteurMechanisms'] = $compteurMechanisms;
            config()->set('database.connections.mysql.strict', true);
            //Mohammed A j'ai du mettre en commentaire comme cela ne fonctionnée pas chez moi pour recuperer les valeur pour le tableau
          //  DB::statement("set session sql_mode='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'");
            DB::reconnect();
            return response()->json($retour);
        }

        elseif ($request->herbId1) {
            $result = DB::table('hinteractions')
                ->leftJoin('targets', 'hinteractions.target_id', '=', 'targets.id')
                ->rightJoin('forces', 'hinteractions.force_id', '=', 'forces.id')
                ->where('hinteractions.herb_id', $request->herbId1)
                ->select('hinteractions.notes as notes', 'hinteractions.id as hId', 'targets.name as targetName', 'forces.name as forceName', 'forces.color as color')
                ->orderBy('hinteractions.force_id', 'ASC')
                ->get();
            $herb = DB::table('herbs')->where('id', $request->herbId1)->pluck('name');

            return response()->json(['result' => $result, 'herb' => $herb]);
        } elseif ($request->mechanismId1) {
            $result = DB::table('hinteractions')
                ->leftJoin('targets', 'hinteractions.target_id', '=', 'targets.id')
                ->rightJoin('forces', 'hinteractions.force_id', '=', 'forces.id')
                ->where('hinteractions.target_id', $request->mechanismId1)
                ->select('hinteractions.notes as notes', 'targets.name as targetName', 'forces.name as forceName', 'forces.color as color')
                ->orderBy('hinteractions.force_id', 'ASC')
                ->get();

            $mechanism = DB::table('targets')->where('id', $request->mechanismId1)->pluck('name');

            return response()->json(['result' => $result, 'mechanism' => $mechanism]);
        }
    }
}
