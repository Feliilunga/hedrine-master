<?php

namespace App\Http\Controllers;

use App\AtcLevel1;
use App\DrugFamily;
use App\Effect;
use App\Force;
use App\Herb;
use App\Drug;
use App\Hinteraction;
use App\HinteractionHasEffect;
use App\Reference;
use App\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
        $herbs = Herb::all();


        return view('interaction.index', compact('herbs'));
    }

    public function get_herbs()
    {
        $herbs = Herb::where('validated', 1)->orderBy('name')->get();
        return $herbs;
        // return $herbs->toJson();
    }

    public function get_drugs(Request $request)
    {
        $drugs = Drug::with('routesDrugs.routes')->orderBy('name')->where('validated', 1)->get();

        if ($request->name === 'atc_level1')
            $drugs = AtcLevel1::orderBy('code')->get();

        return $drugs;
        // return $herbs->toJson();
    }

    public function getHerbs(Request $request)
    {

        $hinteractions = Hinteraction::with('herbs')->whereIn('id', $request->id)->get();

        return $hinteractions;
    }

    public function get_mechanisms()
    {
        $mechanisms = Target::where('validated', 1)
            ->where(function ($query) {
                $query->where('target_type_id', 'LIKE' , 2)
                        ->orWhere('target_type_id', 'LIKE' , 3);
                })
            ->orderBy('name')
            ->get();
        
        return $mechanisms;
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_mecanisme_form()
    {

        $herbs = Herb::all();
        return view('interaction.index_mecanisme', compact('herbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return to herb form
        $herbs = Herb::orderBy('name', 'asc')->get();
        $targets = Target::orderBy('name', 'asc')->get();
        $effects = Effect::orderBy('name', 'asc')->get();
        $force = Force::orderBy('name', 'asc')->get();
        $references = Reference::orderBy('title')->get();

        return view('admin.interaction.targets.newHerbTargetForm', compact('herbs', 'targets', 'effects', 'force', 'references'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Auth::user()->role_id);
        $effects = $request->effects;
        $references = $request->references;
        $now = \Carbon\Carbon::now();

        $hinteraction = new Hinteraction;
        $hinteraction->user_id = Auth::user()->id;
        $hinteraction->herb_id = $request->herb;
        $hinteraction->target_id = $request->target;
        $hinteraction->force_id = $request->force;
        $hinteraction->notes = $request->note;
        if (Auth::user()->role_id == 1) {
            $hinteraction->validated = 1;
        }
        $hinteraction->save();

        $hinteraction->effects()->sync($effects, false);
        $hinteraction->references()->sync($references, false);

        if (Auth::user()->role_id == 1) {
            Alert::success('Ok,', 'Votre Hinteraction Target a été ajoutée avec succès !');
        }
        else {
            Alert::success('Ok,', 'Votre Hinteraction Target doit être validée par un admin');
        }
        

        return redirect()->route('hinteraction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function show(Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function edit(Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hinteraction $hinteraction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hinteraction  $hinteraction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hinteraction $hinteraction)
    {
        //
    }
}
