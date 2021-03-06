<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Herb;
use App\HerbHasForm;
use App\Http\Requests\{HerbRequest, HerbUpdate};
use App\Drug;
use App\Hinteraction;
use App\Target;
use APP\HerbForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Symfony\Component\VarDumper\VarDumper;
use App\Notifications\NewHerb as NewHerbNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HerbController extends Controller
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
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;
        //pour la notification solution temporaire
        //dd($herb_forms);
        $herbs = Herb::all();
        //$herb =  Herb::orderBy('name')->where('name', 'LIKE', 'A%')->get();
        $herbsChar = array();
        foreach (range('A', 'Z') as $char) {
            foreach ($herbs as $n) {
                if ($n->name[0] === $char) {
                    $herbsChar[] = $char;
                }
            }
        }
        $resultChars = array_unique($herbsChar);
        in_array('A', $resultChars) ? $disable = null : $disable = 'disabled-char';
        //dd($resultChars);
        //on retourne le résultat dans une view nommée index, la vue se trouve dans la dossier herbs
        return view('herbs/index', compact('herbsChar', 'numberOfTimes_herbForms', 'lastHerb', 'resultChars', 'disable'));
    }

    public function herbsList()
    {
        $herbs = DB::table('herb')->select('*');
        return datatables()->of($herbs)
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $targets = Target::all();
        return view('admin.herbs.form_add_herb', compact('targets'));
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
        $herb =  Herb::orderBy('name')->where('name', 'LIKE', $char . '%')->get();
        //this one used to add class on active char clicked
        $herbCharClicked = Herb::where('name', 'LIKE', $char . '%')->get();
        $herbChar = $char;
        //dd($herbChar);
        //here just for test ...
        //dd($herbs);
        $herbs = Herb::all();
        $herbsChars = array();
        foreach (range('A', 'Z') as $char) {
            foreach ($herbs as $n) {
                if ($n->name[0] === $char) {
                    $herbsChars[] = $char;
                }
            }
        }
        $resultChars = array_unique($herbsChars);
        //dd($resultChars);
        in_array('A', $resultChars) ? $disable = null : $disable = 'disabled-char';

        return view('herbs/index', compact('herb', 'numberOfTimes_herbForms', 'lastHerb', 'herbChar', 'disable', 'resultChars'));
    }

    public function details($id)
    {
        //DD je récupère les informations de la plante (pas les effects et pas les références)

        $herb = Herb::with('hinteractions.herbs', 'hinteractions.effects', 'hinteractions.targets')->findOrFail($id);



        return view("herbs/details", compact('herb'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HerbRequest $request)
    {
        $herb = new Herb;
        $herb->user_id = Auth::user()->id;
        $herb->name = $request->name;
        $herb->sciname = $request->sciname;
        $herb->save();
        $herb->herb_forms()->sync($request->forms, false);

        Alert::success('Ok !', 'Nouvelle plante ajoutée avec succès');

        $adminusers = User::with('roles')->where('role_id', '1')->get();
        //dd($adminusers);
        foreach ($adminusers as $adm) {
            //Mail::to($adm)->send(new NewHerb($herb, $user));
            $adm->notify(new NewHerbNotification($herb));
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $herb = Herb::findOrFail($id);

        return view('herbs/show', compact('herb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function edit(Herb $herb)
    {
        return view('herbs/edit', compact('herb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

       $request->validate([
            'name' => 'required',
            'sciname' => 'required',
        ]);

        $herb = Herb::findOrFail($id);

        $herb->user_id = Auth::user()->id;
        $herb->name = $request->name;
        $herb->sciname = $request->sciname;
        if($herb->validated == -1) {
            $herb->validated = 0;
        }

        $herb->save();

        return redirect()->route('userprofile.modifier')->with('success','La plante a bien été modifiée. Elle est en attente de validation par un admin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Herb  $herb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herb $herb)
    {
        //
    }
}
