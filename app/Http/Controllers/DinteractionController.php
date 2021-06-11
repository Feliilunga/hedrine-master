<?php

namespace App\Http\Controllers;

use App\AtcLevel2;
use App\AtcLevel3;
use App\AtcLevel4;
use App\AtcLevel4Drug;
use App\Atc;
use App\Dinteraction;
use App\RouteDrug;
use App\Drug;
use App\Effect;
use App\Force;
use App\Herb;
use App\Reference;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drugs = Drug::orderBy('name', 'desc')->get();
        $routesDrugs = RouteDrug::with('drugs')
        ->join('drugs', 'route_drugs.drug_id', '=', 'drugs.id')
        ->select('route_drugs.*', 'drugs.name')
        ->orderBy('drugs.name')-> get();
        $targets = Target::orderBy('name', 'desc')->get();
        $effects = Effect::orderBy('name', 'desc')->get();
        $force = Force::orderBy('name', 'desc')->get();
        $references = Reference::orderBy('title', 'desc')->get();
        $leDinteraction = Dinteraction::orderBy('id')->get();
        //dd($references);

        return view('admin.interaction.targets.newDrugTargetForm', compact('drugs', 'targets', 'effects', 'force', 'references', 'routesDrugs', 'leDinteraction'));
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
        //dd(Auth::user()->role_id);
        // $dinteract = Dinteraction::orderBy('id')->get();

        // foreach ($dinteract as $dinter) {
        //     if ($dinter->route_drug_id == $request->drug && $dinter->target_id == $request->target) {
            //     // dd($dinter);
            //     // Alert::error('Erreur !', 'Une interraction simmilaire existe déjà.');
            //     $alert = echo "<script>confirm('Il existe déjà une dinteraction similaire, Voulez-vous continuer?')</script>";
            //     // $alert = Alert::warning('Are you sure?', 'Il existe déjà une dinteraction similaire, Voulez-vous continuer?');
            //     // ->showCancelButton('Cancel', '#aaa')->persistent("Close this");
                
            //     // return redirect()->route('newDrugTarget');
            //     // // dd($alerte);
            //     if ($alert) {
            //         // alert()->warning($request->session()->get('warning'));
                    
            //         return redirect()->route('dinteraction.index');
            //     }
            //     else{
            //         dd('no');
            //         return redirect()->route('dinteraction.index');
            //     }    
                   
            // }    
                //     dd('test');
            
           
        
        // }    
                // dd('test again');
                $effects = $request->effects;
                $references = $request->references;
                $now = \Carbon\Carbon::now();

                $dinteraction = new Dinteraction;
                $dinteraction->user_id = Auth::user()->id;
                $dinteraction->route_drug_id = $request->drug;
                $dinteraction->target_id = $request->target;
                $dinteraction->force_id = $request->force;
                $dinteraction->notes = $request->note;
                if (Auth::user()->role_id == 1) {
                    $dinteraction->validated = 1;
                }
                $dinteraction->save();

                $dinteraction->effects()->sync($effects, false);
                $dinteraction->references()->sync($references, false);
                if (Auth::user()->role_id == 1) {
                    Alert::success('Ok,', 'Votre Dinteraction a été ajoutée avec succès !');
                } else {
                    Alert::success('Ok,', 'Votre Dinteraction doit être validée par un admin');
                }

                return redirect()->route('dinteraction.index');
            
        
    }       

    // get the drug family from request api ajax

    public function get_drug_families(Request $request)
    {
        //echo $request->family;
        if ($request->atc_level == 5){
            $singleDrugFamily = AtcLevel4Drug::with('drugs')->where('atc_level4_id', $request->id)->orderBy('drug_code')->get();
        }
        else if ($request->atc_level == 4){
            $singleDrugFamily = AtcLevel4::where('atc_level3_id', $request->id)->orderBy('code')->get();
        }
        else if ($request->atc_level == 3){
            $singleDrugFamily = AtcLevel3::where('atc_level2_id', $request->id)->orderBy('code')->get();
        }
        else {
            $singleDrugFamily = AtcLevel2::where('atc_level1_id', $request->id)->orderBy('code')->get();
        }

        return $singleDrugFamily;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function show(Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dinteraction $dinteraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dinteraction  $dinteraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dinteraction $dinteraction)
    {
        //
    }
}
