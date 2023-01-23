<?php

namespace App\Http\Controllers\Back;

use App\DataTables\DrugssDataTable;
use App\Dinteraction;
use App\Hinteraction;
use App\Http\Controllers\Controller;
use App\Http\Requests\TargetRequest;
use App\Drug;
use App\Herb;
use App\Target;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\Notifications\NewTarget as NewTargetNotification;
use App\TemporaryData;

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
        $targetsWithRelations = Target::with('targetype', 'user')->where('validated',1)->get();
        return view('admin.targets.index', compact('targetsWithRelations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.targets.form_add_target');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TargetRequest $request)
    {
        $target = new Target;

        $target->user_id = Auth::user()->id;
        $target->name = $request->name;
        $target->long_name = $request->long_name;
        $target->notes = $request->notes;
        $target->target_type_id = $request->target_type_id;

        if($request->validated != null){
            if($request->validated == 1){
                if (Auth::user()->role_id <= 2) {
                    $target->validated = 1; 
                    Alert::success('Ok !', 'Nouveau target a été validé');
                }
            }
        }else{
            $target->validated = 0; 
            Alert::success('Ok !', 'Nouveau target en cours de validation');
        }

        // if (Auth::user()->role_id <= 2) {
        //     $target->validated = 1;
        //     Alert::success('Ok !', 'Nouveau target a été validé');
        // } else {
        //     Alert::success('Ok !', 'Nouveau target en cours de validation');
        // }

        $target->save();
        //$adminusers = User::with('roles')->where('role_id', '1')->get();
        //dd($adminusers);
        //foreach ($adminusers as $adm) {
            //Mail::to($adm)->send(new NewHerb($herb, $user));
            //$adm->notify(new NewTargetNotification($target));
        //}

        return redirect("admin/target");
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
    public function edit(Target $target)
    {
        return view('admin.targets.form_add_target', ['target' => $target]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Target $target)
    {
        if (Auth::user()->role_id <= 3) {

            //for Admin or publisher
            if (Auth::user()->role_id <= 2) {
                //dteu $message: comme nous avons plusieurs IFs imbriqués, le message sera conditionnel 
                //(Afin que les admins ou publish soient au courant que le target n'est pas validé). (Avec un message pas défaut); 
                
                $message = "Votre target a été mise à jour avec succès."; 
                $target->update($request->all());
                if($request->validated != null){
                    if($request->validated == 1){
                        $target->validated = 1;
                    }else if($request->validated == 0){
                        $target->validated = 0;
                        $message = $message . " Il est en attente de validation par un Administrateur ou un Publisher.";
                    }
                }else{
                    $target->validated = 0;
                    $message = $message . " Il est en attente de validation par un Administrateur ou un Publisher.";
                }
                $target->save();
                Alert::success('Ok !', $message);
            }
            //Editor
            else if (Auth::user()->role_id == 3) {

                $original = ["name" => $target->name, "long_name" => $target->long_name, 'notes' => $target->notes, 'target_type_id' => $target->target_type_id];
                $new = ["name" => $request->name, "long_name" => $request->long_name, 'notes' => $request->notes, 'target_type_id' => $request->target_type_id];
                //mod formt de herb dd($request->forms);
                $data = array_diff($new, $original);
                foreach ($data as $key => $value) {
                    $temporary = new TemporaryData;
                    $temporary->type_id = $target->id;
                    $temporary->type_table = "targets";
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
                Alert::success('Attention !', 'Votre target doit être validé par un admin ou un publisher avant d\'être actif.');
            }
            //return dd($request->validated); 
            return redirect(route('target.index'));

        }
        //lector or other
        else {
            Alert::error('Oups !', 'Vous n\'avez pas les autorisations nécessaires pour effectuer cette action.');
        }
        return back();
        // Ancien code
        // $editor = Auth::user()->role_id === 3;
        // $boss = Auth::user()->role_id <= 2;

        // //dd($request->forms);

        // if ($editor || ($boss && !$request->validated)) {
        //     $original = ["name" => $target->name, "long_name" => $target->long_name, 'notes' => $target->notes, 'target_type_id' => $target->target_type_id];
        //     $new = ["name" => $request->name, "long_name" => $request->long_name, 'notes' => $request->notes, 'target_type_id' => $request->target_type_id];
        //     //mod formt de herb dd($request->forms);
        //     $data = array_diff($new, $original);

        //     foreach ($data as $key => $value) {
        //         $temporary = new TemporaryData;
        //         $temporary->type_id = $target->id;
        //         $temporary->type_table = "targets";
        //         $temporary->type_field = $key;
        //         if (!in_array($value, $original)) {
        //             $temporary->original_value = $original[$key];
        //             $temporary->new_value = $value;
        //         }
        //         $temporary->modified = true;
        //         $temporary->author = Auth::user()->name . " " . Auth::user()->firstname;
        //         $temporary->author_id = Auth::id();
        //         $temporary->save();
        //     }

        //     Alert::success('Merci !', 'Votre plante est en cours de vérification par un publisher  ou un administrateur');
        // } elseif ($boss && $request->validated) {
        //     $target->name = $request->name;
        //     $target->long_name = $request->long_name;
        //     $target->notes = $request->notes;
        //     $target->target_type_id = $request->target_type_id;
        //     $target->validated = 1;
        //     $target->verified_by = Auth::user()->name . " " . Auth::user()->firstname;
        //     $target->save();

        //     Alert::success('Ok !', 'Votre plante a été mis à jour avec succès');
        // }

        // return redirect('admin/target');
    }

    public function updates(Request $request, Target $target)
    {
        dd($target);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Target $target)
    {
        $target->delete();
        return redirect(route('target.index'));
    }

    public function alert(Target $target)
    {

        return view('admin.targets.destroy', ['target' => $target]);
    }

    public function details($id)
    {
        $target = Target::findOrFail($id);

        return view('admin.targets.show', $target);
    }
}
