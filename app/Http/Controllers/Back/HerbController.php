<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\HerbRequest;
use App\Herb;
use App\Target;
use App\TemporaryData;
use App\User;
use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\NewHerb as NewHerbNotification;



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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numberOfTimes_herbForms = 0;
        $lastHerb = 0;
        $herbsWithoutRelations = Herb::where('validated',1)->with("herb_forms")->get();
        return view('admin.herbs.index', compact('numberOfTimes_herbForms', 'lastHerb', 'herbsWithoutRelations'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $editor = Auth::user()->role_id === 3;
        $boss = Auth::user()->role_id <= 2;

        //dd($request->validated);
        //dd($request->validated);

        if ($editor || ($boss && !$request->validated)) {
            $herb = new Herb;
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->user_id = Auth::id();
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            /*$new = ["name" => $herb->name, "sciname" => $herb->sciname, "herb_forms" => json_encode($request->forms, JSON_NUMERIC_CHECK)];
            //dd($data);
            foreach ($new as $key => $value)
            {
                $temporary = new TemporaryData;
                $temporary->type_id = $herb->id;
                $temporary->type_table = "herbs";
                $temporary->type_field = $key;
                $temporary->new_value = $value;
                $temporary->modified = false;
                $temporary->author = Auth::user()->name." ".Auth::user()->firstname;
                $temporary->author_id = Auth::id();
                $temporary->save();
            }*/

            Alert::success('Merci !', 'Votre plante est en cours de vérification par un publisher  ou un administrateur');
        } elseif ($boss && $request->validated) {
            //dd($request->forms);
            $herb = new Herb;
            $herb->user_id = Auth::user()->id;
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->validated = 1;
            $herb->verified_by = Auth::user()->name . " " . Auth::user()->firstname;
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            Alert::success('Ok !', 'Nouvelle plante ajouté avec succès');

            $adminusers = User::with('roles')->where('role_id', '1')->get();
            //dd($adminusers);
            foreach ($adminusers as $adm) {
                //Mail::to($adm)->send(new NewHerb($herb, $user));
                $adm->notify(new NewHerbNotification($herb));
            }
        }
        return redirect('/admin/herb');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('herbs.show', compact('herb'));
    }
    public function showHerb(Herb $herb)
    {

        return view('herbs.show', compact('herb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Herb $herb)
    {

        return view('admin.herbs.form_add_herb', ['herb' => $herb]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Herb $herb)
    {
        $editor = Auth::user()->role_id === 3;
        $boss = Auth::user()->role_id <= 2;

        //dd($request->forms);

        if ($editor || ($boss && !$request->validated)) {
            $forms = array();
            foreach ($herb->herb_forms as $form)
            {
                $forms[] = $form->id;
            }

            $original = ["name" => $herb->name, "sciname" => $herb->sciname];
            $new = ["name" => $request->name, "sciname" => $request->sciname];
            //mod formt de herb dd($request->forms);
            $data = array_diff($new, $original);
            //dd($data);

            foreach ($data as $key => $value) {
                $temporary = new TemporaryData;
                $temporary->type_id = $herb->id;
                $temporary->type_table = "herbs";
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

            if ($forms != $request->forms) {
                //dd($request->forms);
                $temporary = new TemporaryData;
                $temporary->type_id = $herb->id;
                $temporary->type_table = "herbs";
                $temporary->type_field = "herb_forms";
                $temporary->modified = true;
                $temporary->author = Auth::user()->name . " " . Auth::user()->firstname;
                $temporary->author_id = Auth::id();
                $temporary->save();
                $temporary->herb_forms_temporary()->sync($request->forms);
            }

            Alert::success('Merci !', 'Votre plante est en cours de vérification par un publisher  ou un administrateur');
        } elseif ($boss && $request->validated) {
            $herb->name = $request->name;
            $herb->sciname = $request->sciname;
            $herb->validated = 1;
            $herb->verified_by = Auth::user()->name . " " . Auth::user()->firstname;
            $herb->save();
            $herb->herb_forms()->sync($request->forms);

            Alert::success('Ok !', 'Votre plante a été mise à jour avec succès');
        }

        return redirect('admin/herb');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Herb $herb)
    {
        $herb->delete();

        return redirect(route('herb.index'));
    }

    public function alert(Herb $herb)
    {

        return view('admin.herbs.destroy', ['herb' => $herb]);
    }

    /* public function details($id)
    {
        $herb = Herb::findOrFail($id);

        return view('admin.herbs.show',$herb);
    }*/
}
