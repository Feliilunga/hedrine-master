<?php

namespace App\Http\Controllers\Back;

use App\Drug;
use App\Herb;
use App\User;
use App\Route;
use App\Target;
use App\AtcLevel4;
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

        return view('admin.drugs.form_add_drug', compact('routes', 'targets', 'atc4All'));
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

        $drug->user_id = Auth::user()->id;
        $drug->name = $request->name;
        //$drug->drug_families_id = $request->drug_families_id;
        $drug->drug_families_id = 1;
        $drug->route_id = $request->route_id;



        $drug->atc_level4_id = $request->atc_level4_id;
        $drug->code = $request->code;

        //$drug->atc_id = $request->atc_id;
        $drug->atc_id = 1;


        if (Auth::user()->role_id <= 2) {
            $request->validated
                ? $drug->validated = 1
                : $drug->validated = 0;
            $drug->save();
            $drug->targets()->sync($request->targets, false);
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
            $drug->targets()->sync($request->targets, false);
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
        return view('admin.drugs.form_add_drug', ['drug' => $drug], compact('routes', 'atc4All'));
    }

    public function getAllDrogs(Request $request)
    {

        if ($request->ajax()) {
            $query = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugs.routes', 'drugFamiliesDrugs.drugsFamilies','user')->select('drugs.*');

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
        $drug->name = $request->name;
        //$drug->drug_families_id = $request->drug_families_id;
        //$drug->atc_id = $request->atc_id;
        $drug->route_id = $request->route_id;
        $drug->code = $request->code;
        //Mohammed de l'update pour atc_id il fallait mettre atc_level4_id
        $drug->atc_level4_id = $request->atc_level4_id;

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
        } else {
            $drug->save();

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
            $drugs = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugsdinteractions', 'routesDrugs.dinteractions.effects', 'routesDrugs.dinteractions.targets')->where('atc_level4_id',$id)->get();
      //   dd($drugs,$id,"if");
            return view("drugs/details", compact('drugs', 'type'));
        }
        else {

            $drug = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1', 'routesDrugs.dinteractions', 'routesDrugs.dinteractions.effects', 'routesDrugs.dinteractions.targets')->findOrFail($id);
         // dd($drug->atc_level4_id,$id,"else");
            $drugs[0] = $drug;
            return view("drugs/details", compact('drugs', 'type'));
        }

        //dd($drug);
        return view("drugs/details", compact('drug', 'type'));
    }
}
