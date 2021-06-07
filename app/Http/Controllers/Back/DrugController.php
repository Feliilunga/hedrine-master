<?php

namespace App\Http\Controllers\Back;

use App\Drug;
use App\Herb;
use App\User;
use App\Route;
use App\Target;
use App\AtcLevel4;
use App\RouteDrug;
use App\Dinteraction;
use App\AtcLevel4Drug;
use App\DrugFamily;
use App\DrugFamilyDrug;
use App\TemporaryData;
use Illuminate\Http\Request;
use App\Http\Requests\DrugRequest;
use Illuminate\Support\Facades\DB;
use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;
use App\Notifications\NewDrugs as NewDrugNotification;



class DrugController extends Controller
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

        return view('admin.drugs.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        $targets = Target::all();
        $atc4All = AtcLevel4::all();
        $atcPiv = AtcLevel4Drug::all();
        $routePiv = RouteDrug::all();

        return view('admin.drugs.form_add_drug', compact('routes', 'targets', 'atc4All', 'routePiv'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DrugRequest $request)
    {
        // On récupère un compteur placer dans le formulaire pour connaitre le nombre d'ajout a effectué Félicien
        $cpt = $request->leCpt;
        $cptR = $request->cptRoute;
        if ($cpt == null) {
            $cpt = 0;
        }
        else{
            $cpt = $request->leCpt;
        }

        if ($cptR == null) {
            $cptR = 0;
        }
        else{
            $cptR = $request->cptRoute;
        }

        $drug = new Drug;
        $drug->name = $request->name;
        $drug->user_id = Auth::user()->id;
        //$drug->drug_families_id = $request->drug_families_id;
        // $teest = SELECT MAX(id) AS max_id, TesChamps FROM sorties
        $atcPivot; $atcPivot0; $atcPivot1; $atcPivot2; $atcPivot3; $atcPivot4; $atcPivot5; $atcPivot6;
       

        //$drug->atc_id = $request->atc_id;

        if (Auth::user()->role_id <= 2) {
            $request->validated
                ? $drug->validated = 1
                : $drug->validated = 0;
            $drug->save();
            $lastId = $drug->id;
            for ($i=0; $i<$cpt+1; $i++) {
                if (isset($request->{'atc_level4_id'.$i})) {
                    ${"atcPivot".$i} = new AtcLevel4Drug;
                    ${"atcPivot".$i}->atc_level4_id = $request->{'atc_level4_id'.$i};
                    ${"atcPivot".$i}->drug_id = $lastId;
                    ${"atcPivot".$i}->drug_code = $request->{'code'.$i};
                    ${"atcPivot".$i}->save();
                }
            }
            for ($i=0; $i<$cptR+1; $i++) {
                if (isset($request->{'route_id'.$i})) {
                    ${"routePivot".$i} = new RouteDrug;
                    ${"routePivot".$i}->route_id = $request->{'route_id'.$i};
                    ${"routePivot".$i}->drug_id = $lastId;
                    ${"routePivot".$i}->save();
                }
            }
            // $drug->targets()->sync($request->targets, false);
            if ($drug->validated == 1) {
                Alert::success('Ok !', 'La DCI a été validé');
            }
            else {
                Alert::success('Ok !', 'La DCI a été ajouté, elle devra être validé par un admin');
            }
        }
        else{
            $drug->validated = 0;
            $drug->save();
            $lastId = $drug->id;
            for ($i=0; $i<$cpt+1; $i++) {
                if ($request->{'atc_level4_id'.$i} !== null) {
                    ${"atcPivot".$i} = new AtcLevel4Drug;
                    ${"atcPivot".$i}->atc_level4_id = $request->{'atc_level4_id'.$i};
                    ${"atcPivot".$i}->drug_id = $lastId;
                    ${"atcPivot".$i}->drug_code = $request->{'code'.$i};
                    ${"atcPivot".$i}->save();
                }
            }
            for ($i=0; $i<$cptR+1; $i++) {
                if ($request->{'route_id'.$i} !== null) {
                    ${"routePivot".$i} = new RouteDrug;
                    ${"routePivot".$i}->route_id = $request->{'route_id'.$i};
                    ${"routePivot".$i}->drug_id = $lastId;
                    ${"routePivot".$i}->save();
                }
            }
            // $drug->targets()->sync($request->targets, false);
            Alert::success('Ok !', 'Merci, la DCI devra être validé par un admin');
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
    public function edit(Drug $drug)
    {
        $routes = Route::all();
        $atc4All = AtcLevel4::all();
        $atcPiv = AtcLevel4Drug::all();
        $routePiv = RouteDrug::all();
        $dinteract = Dinteraction::all();
        return view('admin.drugs.form_add_drug', ['drug' => $drug], compact('routes', 'atc4All', 'atcPiv', 'routePiv', 'dinteract'));
    }

    public function getAllDrogs(Request $request)
    {

        if ($request->ajax()) {
            $query = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugs.routes', 'user')->select('drugs.*');

            return DataTables::eloquent($query)->toJson();
        }
        return view('errors.layout');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drug $drug)
    {
        $cpt = $request->leCpt;
        $cptR = $request->cptRoute;
        if ($cpt == null) {
            $cpt = 0;
            //dd('jsuis la');
        }
        else{
            $cpt = $request->leCpt;
        }

        if ($cptR == null) {
            $cptR = 1;
        }
        else{
            $cptR = $request->cptRoute;
        }

        $cpt2 = $cpt;
        $cptR2 = $cptR;
        
        //dd($cptR);

        $drug->name = $request->name;
       
        $actTable=$drug->atcLevel4sDrugs;
        //dd($test);
        
        if (Auth::user()->role_id > 2) {
            $fields = $drug->getDirty();

            foreach ($fields as $field => $value) {
                $tmp = new TemporaryData();

                $tmp->type_id = $drug->id;
                $tmp->type_table = 'drugs';
                $tmp->type_field = $field;
                $tmp->original_value = $drug->getOriginal($field);
                $tmp->new_value = $value;
                $tmp->modified = 1;
                $tmp->author = Auth::user()->firstname . Auth::user()->name;
                $tmp->author_id = Auth::user()->id;

                $tmp->save();
            }

            Alert::success('Ok !', 'Votre modification est en attente de validation par un Administrateur ou un Publisher');
        } 
        else {
            $drug->save();
            $lastId = $drug->id;

            for ($i=0; $i<$cpt+1; $i++) {
                if ($request->{'atc_level4_id'.$i} !== null) {
                    if (isset($drug->atcLevel4sDrugs[$i])) {
                        ${"atcPivot".$i} = $drug->atcLevel4sDrugs[$i];
                        ${"atcPivot".$i}->atc_level4_id = $request->{'atc_level4_id'.$i};
                        ${"atcPivot".$i}->drug_id = $lastId;
                        ${"atcPivot".$i}->drug_code = $request->{'code'.$i};
                        ${"atcPivot".$i}->save();
                    }
                    else{
                        ${"atcPivot".$i} = new AtcLevel4Drug;
                        ${"atcPivot".$i}->atc_level4_id = $request->{'atc_level4_id'.$i};
                        ${"atcPivot".$i}->drug_id = $lastId;
                        ${"atcPivot".$i}->drug_code = $request->{'code'.$i};
                        ${"atcPivot".$i}->save();
                    }
                }
            }

            for ($i=0; $i<$cptR; $i++) {
                if ($request->{'route_id'.$i} !== null) {
                    if (isset($drug->routesDrugs[$i])) {
                        ${"routePivot".$i} = $drug->routesDrugs[$i];
                        ${"routePivot".$i}->route_id = $request->{'route_id'.$i};
                        ${"routePivot".$i}->drug_id = $lastId;
                        ${"routePivot".$i}->save();
                    }
                    else{
                        ${"routePivot".$i} = new RouteDrug;
                        ${"routePivot".$i}->route_id = $request->{'route_id'.$i};
                        ${"routePivot".$i}->drug_id = $lastId;
                        ${"routePivot".$i}->save();
                    }
                }
            }

            Alert::success('Ok !', 'Votre DCI a été mise à jour avec succès');
        }



        return redirect('admin/drug');
    }

    public function updates(Request $request)
    {
        $drug = Drug::findOrFail($request->fid);

        $drug->name = $request->name;
        $drug->drug_families_id = $request->families[0];
        $drug->route_id = $request->route[0];
        $drug->atc_id = $request->atc[0];

        $drug->save();

        Alert::success('Ok !', 'Votre DCI a étè mis à jour avec succès');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drug $drug)
    {
        $drug->delete();
        return redirect(route('drug.index'));
    }

    public function alert(Drug $drug)
    {
        return view('admin.drugs.destroy', ['drug' => $drug]);
    }

    public function details($id, $type = null)
    {

        if($type == "showAll"){
            $drugs = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugsdinteractions', 'routesDrugs.dinteractions.effects', 'routesDrugs.dinteractions.targets', 'routesDrugs.routes')->where('atc_level4_id',$id)->get();
      //   dd($drugs,$id,"if");
            return view("drugs/details", compact('drugs', 'type'));
        }
        else {

            $drug = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugs.dinteractions', 'routesDrugs.dinteractions.effects', 'routesDrugs.dinteractions.targets', 'routesDrugs.routes')->findOrFail($id);
         // dd($drug->atc_level4_id,$id,"else");
            $drugs[0] = $drug;
            return view("drugs/details", compact('drugs', 'type'));
        }

        //dd($drug);
        return view("drugs/details", compact('drug', 'type'));
    }
}
