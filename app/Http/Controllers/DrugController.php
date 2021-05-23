<?php

namespace App\Http\Controllers;

use App\AtcLevel1;
use App\Drug;
use App\Herb;
use App\Post;
use App\DrugFamily;
use App\Target;
use App\AtcLevel4Drug;
use App\RouteDrug;
use App\DrugFamilyDrug;
use DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

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
        // code added for the filter search chars
        $drugAll = Drug::with('atcLevel4sDrugs.atc_level4.atc_level3.atc_level2.atc_level1')->orderby('name')->where('validated', 1)->get();
        // $drugAll = Drug::all();
        $drugsChar = array();
        // Old code with additional loop (which i find to be useless)
        // foreach (range('A', 'Z') as $char) {
        //     foreach ($drugAll as $n) {
        //         if ($n->name[0] === $char) {
        //             $drugsChar[] = $char;
        //         }
        //     }
        // }
        // New code better performance for same output
        foreach ($drugAll as $n) {
            if (!in_array(strtoupper($n->name[0]), $drugsChar)){
                $drugsChar[] =
                strtoupper($n->name[0]);
            }
        }

        $resultChars = array_unique($drugsChar);
        in_array('A', $resultChars) ? $disable = null : $disable = 'disabled-char';
        $atcList = AtcLevel1::with('atc_level2s.atc_level3s.atc_level4s.atcLevel4sDrugs.drugs.routesDrugs.routes')->get();
        // $atcList = AtcLevel1::all();
        //dd($atcList[0]->atc_level2s[1]->atc_level3s[1]->atc_level4s[2]);

        return view('drugs/index', ["drugAll" => $drugAll, "resultChars" => $resultChars, "disable" => $disable, "atcList" => $atcList]);
    }

    //create function to get data by char
    //using this function i can get the char via a request and return data according the need ...
    /**
     * @param  string  $char
     * @return View
     */

    public function filterByChar($char)
    {
        // var to know if we want to display filtered by first letter datas
        $drugAll =  Drug::with('atcLevel4sDrugs.atc_Level4.atc_level3.atc_level2.atc_level1')->where('name', 'LIKE', $char . '%')->where('validated', 1)->orderBy('name')->get();
        //this one used to add class on active char clicked
        //$drugCharClicked = Drug::where('name', 'LIKE', $char . '%')->get();
        //dd($drugCharClicked);
        $drugChar = $char;
        $drugsAll = Drug::all();
        $drugChars = array();
        // Old code with additional loop (which i find to be useless)
        // foreach (range('A', 'Z') as $char) {
        //     foreach ($drugAll as $n) {
        //         if ($n->name[0] === $char) {
        //             $drugsChar[] = $char;
        //         }
        //     }
        // }
        // New code better performance for same output
        foreach ($drugsAll as $n) {
            if (!in_array(strtoupper($n->name[0]), $drugChars)){
                $drugChars[] =
                strtoupper($n->name[0]);
            }
        }
        $resultChars = array_unique($drugChars);
        //dd($resultChars);
        in_array($char, $resultChars) ? $disable = null : $disable = 'disabled-char';
        $atcList = AtcLevel1::with('atc_level2s.atc_level3s.atc_level4s.atcLevel4sDrugs.drugs.routesDrugs.routes')->get();
        //dd($disable);

        return view('drugs/index', ["drugAll" => $drugAll, "resultChars" => $resultChars, "disable" => $disable, "atcList" => $atcList]);
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
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $drug = Drug::findOrFail($id);

        return view('drugs/show', compact('drug'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function edit(Drug $drug)
    {
        $routes = Route::all();
        return view('admin.drugs.form_add_drug', ['drug' => $drug], compact('routes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $drug = Drug::findOrFail($id);

        $drug->user_id = Auth::user()->id;
        $drug->name = $request->name;
        $drug->drug_families_id = $request->drug_families_id;
        $drug->route_id = $request->route_id;
        $drug->atc_id = $request->atc_id;

        if ($drug->validated == -1) {
            $drug->validated = 0;
        }

        $drug->save();

        return redirect()->route('userprofile.modifier_dci')->with('success', 'Le dci a bien étè modifié. Il est en entente pour etre valide par un admin');
    }

    /**
     * Update an ad.
     *
     * @param \App\Models\Herb
     */
    public function updating($drug, $data)
    {
        $drug->update($data);
    }


    public function getAllDrogs(Request $request)
    {
        if ($request->ajax()) {
            $query = Drug::with('drug_family', 'routes')->select('drugs.*');

            return DataTables::eloquent($query)->toJson();
        }
        return view('errors.layout');
    }
    /**
     * Remove the specified resource from storage.©©
     *
     * @param  \App\Drug  $drug
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drug $drug)
    {
        //
    }

    public function details($id)
    {
        $drug = Drug::with('dinteractions.routesDrugs', 'dinteractions.effects', 'dinteractions.targets')->findOrFail($id);

        //dd($drug);
        return view("drugs/details", compact('drug'));
    }
}
