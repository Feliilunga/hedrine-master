<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Herb;

class UserProfileController extends Controller
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
    public function index(Request $request)
    {


        //Thierry Pour les Plantes
        $herbs = $this->getByUser($request->user());

        $herbsAttentsCount = $this->herbEntente($herbs);
        $herbToModifierCount = $this->herbToModif($herbs);
        $herbActivesCount  = $this->activeCount($herbs);

        //Thierry Pour les Drugs
        $drugs = $this->getDrugByUser($request->user());

        $drugsAttentsCount = $this->drugEntente($drugs);
        $drugsToModifierCount = $this->drugToModif($drugs);
        $drugsActivesCount  = $this->activeDrugCount($drugs);

        //Thierry Pour les Targets
        $targets = $this->getTargetByUser($request->user());

        $targetsAttentsCount = $this->targetEntente($targets);
        $targetsToModifierCount = $this->targetToModif($targets);
        $targetsActivesCount  = $this->activeTargetCount($targets);

        //Thierry Pour Hinteraction
        $hinteractions = $this->getHinteractionByUser($request->user());

        $hinteractionsAttentsCount = $this->hinteractionEntente($hinteractions);
        $hinteractionsToModifierCount = $this->hinteractionToModif($hinteractions);
        $hinteractionsActivesCount  = $this->activeHinteractionCount($hinteractions);

        //Thierry Pour Dinteraction
        $dinteractions = $this->getDinteractionByUser($request->user());

        $dinteractionsAttentsCount = $this->dinteractionEntente($dinteractions);
        $dinteractionsToModifierCount = $this->dinteractionToModif($dinteractions);
        $dinteractionsActivesCount  = $this->activeDinteractionCount($dinteractions);

        //Thierry Pour Reference
        $references = $this->getReferenceByUser($request->user());

        $referencesAttentsCount = $this->referenceEntente($references);
        $referencesToModifierCount = $this->referenceToModif($references);
        $referencesActivesCount  = $this->activeReferenceCount($references);

        return view('userprofile.index', compact('herbsAttentsCount', 'herbToModifierCount', 'herbActivesCount'
             ,'drugsAttentsCount','drugsToModifierCount','drugsActivesCount',
            'targetsAttentsCount','targetsToModifierCount','targetsActivesCount',
            'hinteractionsAttentsCount','hinteractionsToModifierCount','hinteractionsActivesCount',
            'dinteractionsAttentsCount','dinteractionsToModifierCount','dinteractionsActivesCount',
            'referencesAttentsCount','referencesToModifierCount','referencesActivesCount'));
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
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getByUser($user)
    {
        return $user->herbs()->get();
    }
    /**
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getDrugByUser($user)
    {
        return $user->drugs()->get();
    }

    /**
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getTargetByUser($user)
    {
        return $user->targets()->get();
    }

    /**
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getHinteractionByUser($user)
    {
        return $user->hinteractions()->get();
    }

    /**
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getDinteractionByUser($user)
    {
        return $user->dinteractions()->get();
    }

    /**
     * Get a herb by user.
     *
     * @param \App\Models\User $user
     */
    public function getReferenceByUser($user)
    {
        return $user->references()->get();
    }

     /**
     *  For Herb.
     *
     * @param \App\Models\User $user
     */
    public function allValidated(Request $request)
    {
        $herbes = $this->validated($request->user(), 5);

        return view('userprofile.validated', compact('herbes'));
    }

    /**
     *  For Drug.
     *
     * @param \App\Models\User $user
     */
    public function allValidated_dci(Request $request)
    {
        $druggs = $this->validatedDCI($request->user(), 5);

        return view('userprofile.drugs.validated', compact('druggs'));
    }
    /**
     *  For Target.
     *
     * @param \App\Models\User $user
     */
    public function allValidated_target(Request $request)
    {
        $targetts = $this->validatedTarget($request->user(), 5);

        return view('userprofile.targets.validated', compact('targetts'));
    }

    /**
     *  For Target.
     *
     * @param \App\Models\User $user
     */
    public function allValidated_hinteraction(Request $request)
    {
        $hinteracttions = $this->validatedHinteraction($request->user(), 5);

        return view('userprofile.hinteractions.validated', compact('hinteracttions'));
    }
     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function validated($user, $nbr)
    {
        return $user->herbs()->where('validated', 1)->paginate($nbr);
    }

     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function validatedDCI($user, $nbr)
    {
        return $user->targets()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function validatedTarget($user, $nbr)
    {
        return $user->targets()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function validatedHinteraction($user, $nbr)
    {
        return $user->hinteractions()->where('validated', 1)->paginate($nbr);
    }
     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function actives(Request $request)
    {
        $herbes = $this->active($request->user(), 5);
        return view('userprofile.actives', compact('herbes'));
    }
     /**
     * Get the no active dci.
     *
     * @param integer $nbr
     */
    public function actives_dci(Request $request)
    {
        $druggs = $this->activeDrug($request->user(), 5);
        return view('userprofile.drugs.actives', compact('druggs'));
    }

     /**
     * Get the no active target.
     *
     * @param integer $nbr
     */
    public function actives_target(Request $request)
    {
        $targetts = $this->activeTarget($request->user(), 5);
        return view('userprofile.targets.actives', compact('targetts'));
    }

     /**
     * Get the no active target.
     *
     * @param integer $nbr
     */
    public function actives_hinteraction(Request $request)
    {
        $hinteracttions = $this->activeHinteraction($request->user(), 5);
        return view('userprofile.hinteractions.actives', compact('hinteracttions'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function active($user, $nbr)
    {
        return $user->herbs()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeDrug($user, $nbr)
    {
        return $user->drugs()->where('validated', 1)->paginate($nbr);
    }

     /**
     * Get the no active target.
     *
     * @param integer $nbr
     */
    public function activeTarget($user, $nbr)
    {
        return $user->targets()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeHinteraction($user, $nbr)
    {
        return $user->hinteractions()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeDinteraction($user, $nbr)
    {
        return $user->dinteractions()->where('validated', 1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeReferences($user, $nbr)
    {
        return $user->references()->where('validated', 1)->paginate($nbr);
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeCount($herbs)
    {
        return $herbs->where('validated', 1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeDrugCount($drugs)
    {
        return $drugs->where('validated', 1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeTargetCount($targets)
    {
        return $targets->where('validated', 1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeHinteractionCount($hinteractions)
    {
        return $hinteractions->where('validated', 1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeDinteractionCount($dinteractions)
    {
        return $dinteractions->where('validated', 1)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function activeReferenceCount($reference)
    {
        return $reference->where('validated', 1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attenteHerb(Request $request)
    {
        $herbes = $this->attente($request->user(), 5);
        return view('userprofile.waiting', compact('herbes'));
    }

    /**
     * Get the no active drug.
     *
     * @param integer $nbr
     */
    public function attenteDrug(Request $request)
    {
        $druggs = $this->attente_drug($request->user(), 5);
        return view('userprofile.drugs.waiting', compact('druggs'));
    }


    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attenteTarget(Request $request)
    {
        $targetts = $this->attente_target($request->user(), 5);
        return view('userprofile.targets.waiting', compact('targetts'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attenteHinteraction(Request $request)
    {
        $hinteracttions = $this->attente_hinteraction($request->user(), 5);
        return view('userprofile.hinteractions.waiting', compact('hinteracttions'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attenteDinteraction(Request $request)
    {
        $dinteractions = $this->attente_dinteraction($request->user(), 5);
        return view('userprofile.waiting_dinteraction', compact('dinteractions'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attenteReference(Request $request)
    {
        $references = $this->attente_reference($request->user(), 5);
        return view('userprofile.waiting_reference', compact('references'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierHerb(Request $request)
    {
        $herbes = $this->modifHerb($request->user(), 5);

        return view('userprofile.modifier', compact('herbes'));
    }
     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierDrug(Request $request)
    {
        $druggs = $this->modifDrug($request->user(), 5);
        return view('userprofile.drugs.modifier', compact('druggs'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierTarget(Request $request)
    {
        $targetts = $this->modifTarget($request->user(), 5);
        return view('userprofile.targets.modifier', compact('targetts'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierHinteraction(Request $request)
    {
        $hinteracttions = $this->modifHinteraction($request->user(), 5);
        return view('userprofile.hinteractions.modifier', compact('hinteracttions'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierDinteraction(Request $request)
    {
        $dinteractions = $this->modifDinteraction($request->user(), 5);
        return view('userprofile.modifier_dinteraction', compact('dinteractions'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifierReference(Request $request)
    {
        $reference = $this->modifReference($request->user(), 5);
        return view('userprofile.modifier_reference', compact('reference'));
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifHerb($user, $nbr)
    {
        return $user->herbs()->where('validated', -1)->paginate($nbr);
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifDrug($user, $nbr)
    {
        return $user->drugs()->where('validated', -1)->paginate($nbr);
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifTarget($user, $nbr)
    {
        return $user->targets()->where('validated', -1)->paginate($nbr);
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifHinteraction($user, $nbr)
    {
        return $user->hinteractions()->where('validated', -1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifDinteraction($user, $nbr)
    {
        return $user->dinteractions()->where('validated', -1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function modifReference($user, $nbr)
    {
        return $user->references()->where('validated', -1)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente($user, $nbr)
    {
        return $user->herbs()->where('validated', 0)->paginate($nbr);
    }

     /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente_drug($user, $nbr)
    {
        return $user->drugs()->where('validated', 0)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente_target($user, $nbr)
    {
        return $user->targets()->where('validated', 0)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente_hinteraction($user, $nbr)
    {
        return $user->hinteractions()->where('validated', 0)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente_dinteraction($user, $nbr)
    {
        return $user->dinteractions()->where('validated', 0)->paginate($nbr);
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function attente_reference($user, $nbr)
    {
        return $user->references()->where('validated', 0)->paginate($nbr);
    }



    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function herbEntente($herb)
    {
        return $herb->where('validated', 0)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function drugEntente($drug)
    {
        return $drug->where('validated', 0)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function targetEntente($target)
    {
        return $target->where('validated', 0)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function hinteractionEntente($hinteraction)
    {
        return $hinteraction->where('validated', 0)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function dinteractionEntente($dinteraction)
    {
        return $dinteraction->where('validated', 0)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function referenceEntente($reference)
    {
        return $reference->where('validated', 0)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function herbToModif($herb)
    {
        return $herb->where('validated', -1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function drugToModif($drug)
    {
        return $drug->where('validated', -1)->count();
    }
    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function targetToModif($target)
    {
        return $target->where('validated', -1)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function hinteractionToModif($hinteraction)
    {
        return $hinteraction->where('validated', -1)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function dinteractionToModif($dinteraction)
    {
        return $dinteraction->where('validated', -1)->count();
    }

    /**
     * Get the no active herb.
     *
     * @param integer $nbr
     */
    public function referenceToModif($reference)
    {
        return $reference->where('validated', -1)->count();
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
