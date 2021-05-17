<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

use App\{Herb, Drug, Target, Dinteraction, Hinteraction, Reference, TemporaryData};
use App\Mail\{
    DinteractionTargetToUpdate,
    HinteractionTargetToUpdate,
    HerbToUpdate,
    DrugToUpdate,
    TargetToUpdate,
    HerbRefuse,
    DrugRefused,
    TargetRefused,
    DinteractionTargetRefused,
    HinteractionTargetRefused,
    ReferenceRefused,
    ReferenceToUpdate
};
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\{Http\Request, Support\Facades\DB, Support\Facades\Mail};



class AdminController extends Controller
{
    protected $herb;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(Request $request)
    {

        $notifications = $request->user()->unreadNotifications()->get();
        $newHerbs = 0;

        foreach ($notifications as $notification) {
            if ($notification->type === 'App\Notifications\NewHerb') {
                ++$newHerbs;
            }
        }

        return view('dashboard/dashboard', compact('notifications', 'newHerbs'));
    }
    public function herbs()
    {
        return view('alerts.index');
    }
    /**
     *
     */
    public function quickEdit(Request $request)
    {

        // if ($request->temporary) {
        //     DB::table('temporary_data')->where('type_table', 'herbs')->where('id', $request->tid)->update(['new_value' => $request->new]);
        // } else {

        //     DB::table('herbs')->where('validated', '!=', 1)->where('id', $request->id)
        //         ->update([
        //             'name' => $request->name,
        //             'sciname' => $request->sciname,
        //             //'validated' => 1
        //         ]);
        // }
        $herb = Herb::findOrFail($request->id);

        $herb->name = $request->name;
        $herb->sciname = $request->sciname;
        $herb->save();

        Alert::success("Modification effectuée avec succès !");

        //return response()->json();
        return redirect()->back();
        // return redirect(route('admin.herbs'));
    }

    /**
     *
     */

    public function referenceEdit(Request $request)
    {
        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'references')->where('id', $request->tid)->update(['new_value' => $request->new]);
        } else {

            DB::table('references')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'title' => $request->title,
                    'authors' => $request->authors,
                    'year' => $request->year,
                    'edition' => $request->edition,
                    'url' => $request->url,
                    //'validated' => 1
                ]);
        }

        Alert::success("Reference mise à jour");

        return response()->json();
    }

    /**
     *
     */
    public function drugEdit(Request $request)
    {
        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'drugs')->where('id', $request->tid)->update(['new_value' => $request->new]);
        } else {

            DB::table('drugs')->where('id', $request->id)->update(['name' => $request->name, 'drug_families_id' => $request->familly, 'route_id' => $request->route, 'atc_id' => $request->atc, 'validated' => 1]);

            /**
            DB::table('drugs')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'name' => $request->name,
                ]);

            DB::table('drugs')->where('drug_families_id', $request->id)->delete();
            foreach ($request->families as $id) {
                DB::table('drugs')->insert(['drug_id' => $request->id, 'drug_families_id' => $id]);
            }
             */
        }

        Alert::success("C'est OK");

        return response()->json();
    }

    /**
     *
     */
    public function targetEdit(Request $request)
    {
        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'targets')->where('id', $request->tid)->update(['new_value' => $request->new]);
        } else {
            $forms = $request->forms;

            DB::table('targets')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([

                    'name' => $request->name,
                    'long_name' => $request->long_name,
                    'notes' => $request->notes,
                ]);
        }
        Alert::success("Modification effectuée avec succès !");

        return response()->json();
    }

    /**
     *
     */

    public function hinteractiontargetEdit(Request $request)
    {
        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'hinteractions')->where('id', $request->tid)->update(['new_value' => $request->new]);
        } else {


            DB::table('hinteractions')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([
                    'notes' => $request->notes,
                ]);
        }
        Alert::success("Hinteraction mise à jour");

        return response()->json();
    }
    /**
     *
     */
    public function dinteractiontargetEdit(Request $request)
    {
        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'dinteractions')->where('id', $request->tid)->update(['new_value' => $request->new]);
        } else {
            //$forms = $request->forms;

            DB::table('dinteractions')->where('validated', '!=', 1)->where('id', $request->id)
                ->update([

                    'notes' => $request->notes,
                ]);
        }
        Alert::success("Dinteraction mise à jour");

        return response()->json();
    }
    /**
     *
     */
    public function approve(int $id)
    {
        $herb = Herb::findOrfail($id);
        $herb->validated = 1;
        $herb->verified_by = Auth::user()->firstname . Auth::user()->name;
        $herb->save();

        Alert::success("La nouvelle plante " . $herb->name . " a été approuvé");
        return redirect()->back();
    }

    public function approveTemp($id)
    {
        $tmp = TemporaryData::findOrFail($id);

        if ($tmp->type_field === "herb_forms") {
            DB::table('herb_has_forms')->where("herb_id", $tmp->type_id)->delete();
            $new = DB::table('herb_has_forms')->where('temporary_data_id', $tmp->id)->get();
            foreach ($new as $n) {
                DB::update('update herb_has_forms set temporary_data_id = NULL, herb_id = ? where id = ?', [$tmp->type_id, $n->id]);
            }
        } else {
            $data = DB::table($tmp->type_table)->where('id', $tmp->type_id);

            $data->verified_by = Auth::user()->firstname . Auth::user()->name;
            $data->update([$tmp->type_field => $tmp->new_value]);
        }

        $tmp->delete();

        Alert::success("La modification a été validé");
        return redirect()->back();
    }

    public function editTemporary(Request $request)
    {
        $tmp = TemporaryData::find($request->id);

        $tmp->new_value = $request->new_value;
        $tmp->save();

        Alert::success("OK");
        return redirect()->back();
    }

    /**
     *
     */
    public function approve_dinteraction_target($id)
    {

        //echo $request->id;
        // if ($request->temporary) {
        //     $fields = ["note"];
        //     foreach ($fields as $one) {
        //         if ($one === $request->title) {
        //             DB::table('dinteractions')->where('id', $request->typeid)->update([$one => $request->value]);
        //         }
        //     }

        //     DB::table('temporary_data')->where('type_table', 'dinteractions')->where('id', $request->id)->delete();
        // } else {
        //     DB::table('dinteractions')->where('id', '=', $request->id)->update(['validated' => 1]);
        // }
        // Alert::success('OK !', 'Nouvelle dinteraction target approuvée avec succès');
        // return response()->json(['id' => $request->id]);

        $dinteractions = Dinteraction::findOrFail($id);

        $dinteractions->validated = 1;
        $dinteractions->save();

        Alert::success("La dinteraction " . $dinteractions->name . " a été validé");
        return redirect()->back();
    }
    /**
     *
     */
    //old function with $request > new with $id
    //public function approve_hinteraction_target(Request $request)
    public function approve_hinteraction_target(int $id)
    {

        //echo $request->id;
        // if ($request->temporary) {
        //     $fields = ["note"];
        //     foreach ($fields as $one) {
        //         if ($one === $request->title) {
        //             DB::table('hinteractions')->where('id', $request->typeid)->update([$one => $request->value]);
        //         }
        //     }

        //     DB::table('temporary_data')->where('type_table', 'hinteractions')->where('id', $request->id)->delete();
        // } else {
        //     DB::table('hinteractions')->where('id', '=', $request->id)->update(['validated' => 1]);
        // }
        // Alert::success('OK !', 'Nouvelle hinteraction target approuvée avec succès');
        // return response()->json(['id' => $request->id]);

        //new function
        $hinteraction = Hinteraction::findOrFail($id);

        $hinteraction->validated = 1;
        $hinteraction->save();

        Alert::success("La hinteraction " . $hinteraction->name . " a été validé");
        return redirect()->back();
    }

    public function approve_drug(int $id)
    {
        $drug = Drug::findOrFail($id);

        $drug->validated = 1;
        $drug->save();

        Alert::success("La DCI " . $drug->name . " a été validé");
        return redirect()->back();
    }

    public function approve_target(int $id)
    {
        $target = Target::findOrFail($id);

        $target->validated = 1;
        $target->save();

        Alert::success("La Target " . $target->name . " a été validée");
        return redirect()->back();
    }

    public function approve_reference(int $id)
    {
        $reference = Reference::findOrFail($id);

        $reference->validated = 1;
        $reference->save();

        Alert::success("La référence " . $reference->name . " a été validé");
        return redirect()->back();
    }

    public function refuse(Request $request)
    {

        $id = $request->id;
        //$msg = $request->msg;
        //$herb = DB::table('herbs')->where('id','=',$id)->get();
        //$mail = $herb->user->email;
        if ($request->temporary) {
            //$herb = Herb::findOrFail($request->herb);
            DB::table('temporary_data')->where('type_table', 'herbs')->where('id', '=', $id)->delete();
        } else {
            $herb = Herb::findOrFail($id);
            //sending an email
            //$mail = $herb->user->email;
            //Mail::to($mail)->send(new HerbRefuse($herb->user, $msg));
            DB::table('herbs')->where('id', $id)->delete();
        }

        Alert::success('OK !', 'La plante a bien été refusée');

        return response()->json(['id' => $id]);
    }
    /**
     *
     */
    public function refuse_drug(Request $request)
    {
        $id = $request->id;
        //$msg = $request->msg;

        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'drugs')->where('id', '=', $id)->delete();
            Alert::success('OK !', 'La modification a bien été refusé');
        } else {
            //sending an email
            //event(new HerbRefuseEvent($user, $email, $msg));
            $drug = Drug::findOrFail($id);
            //$mail = $drug->user->email;
            //Mail::to($mail)->send(new DrugRefused($drug->user, $msg));
            DB::table('drugs')->where('id', $id)->delete();

            Alert::success('OK !', 'La DCI a bien été refusé');
        }



        return response()->json(['id' => $id]);
    }
    /**
     *
     */
    public function refuse_dinteraction_target(Request $request)
    {
        $id = $request->id;
        //$target = Dinteraction::findOrFail($id);

        //$msg = $request->msg;

        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'dinteractions')->where('id', '=', $id)->delete();
        } else {
            //sending an email
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new DinteractionTargetRefused($target->user, $msg));
            DB::table('dinteractions')->where('id', $id)->delete();
        }

        Alert::success('OK !', 'Le dinteraction Target a bien été refusé');

        return response()->json(['id' => $id]);
    }
    /**
     *
     */
    public function refuse_hinteraction_target(Request $request)
    {
        $id = $request->id;
        //$target = Hinteraction::findOrFail($id);

        //$msg = $request->msg;

        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'hinteractions')->where('id', '=', $id)->delete();
        } else {
            //sending an email
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new HinteractionTargetRefused($target->user, $msg));
            DB::table('hinteractions')->where('id', $id)->delete();
        }

        Alert::success('OK !', 'La Hinteraction Target a bien été refusée');

        return response()->json(['id' => $id]);
    }

    /**
     *
     */
    public function refuse_target(Request $request)
    {
        $id = $request->id;
        //$target = Target::findOrFail($id);

        //$msg = $request->msg;

        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'targets')->where('id', '=', $id)->delete();
        } else {
            //sending an email
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new TargetRefused($target->user, $msg));
            DB::table('targets')->where('id', $id)->delete();
        }

        Alert::success('OK !', 'La Target a bien été refusée');

        return response()->json(['id' => $id]);
    }

    /**
     *
     */
    public function refuse_reference(Request $request)
    {
        $id = $request->id;
        //$reference = Reference::findOrFail($id);
        //dd($id);

        //$msg = $request->msg;
        //$msg = "ok test pour voir si sa existe";

        if ($request->temporary) {
            DB::table('temporary_data')->where('type_table', 'references')->where('id', '=', $id)->delete();
        } else {
            //sending an email
            //$mail = $reference->user->email;

            //Mail::to($mail)->send(new ReferenceRefused($reference->user, $msg));
            DB::table('references')->where('id', $id)->delete();
        }

        Alert::success('OK !', 'La Reference a bien été refusé !');

        return response()->json(['id' => $id]);
    }


    public function modifs(Request $request)
    {

        $id = $request->id;
        $msg = $request->msg;
        //$herb = DB::table('herbs')->where('id','=',$id)->get();
        $herb = Herb::findOrFail($id);

        //$mail = $herb->user->email;
        //Mail::to($mail)->send(new HerbToUpdate($herb->user, $msg, $herb));

        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('herbs')->where('id', '=', $id)->update(['validated' => -1]);
        }

        Alert::success('OK !', 'La plante doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $herb]);
    }
    public function modifs_drug(Request $request)
    {

        $id = $request->id;
        //$msg = $request->msg;
        $drug = Drug::findOrFail($id);

        //$drug = DB::table('drugs')->where('id', '=', $id)->get();

        //$mail = $drug->user->email;
        //Mail::to($mail)->send(new DrugToUpdate($drug->user, $msg, $drug));

        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('drugs')->where('id', '=', $id)->update(['validated' => -1]);
        }

        Alert::success('OK !', 'La DCI doit être corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $drug]);
    }
    /**
     *
     */
    public function modifs_target(Request $request)
    {
        $id = $request->id;
        //$msg = $request->msg;
        //$target = Target::findOrFail($id);


        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('targets')->where('id', '=', $id)->update(['validated' => -1]);
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new TargetToUpdate($target, $target->user, $msg));
        }

        Alert::success('OK !', 'Le Target doit etre corrigée et le rédacteur va être notifié.');
        return redirect()->back();
    }

    /**
     *
     */
    public function modifs_reference(Request $request)
    {

        $id = $request->id;
        $msg = $request->msg;
        $target = Reference::findOrFail($id);


        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('references')->where('id', '=', $id)->update(['validated' => -1]);
            //$mail = $target->user->email;
            //::to($mail)->send(new ReferenceToUpdate($target->user, $msg));
        }

        Alert::success('OK !', 'La reference doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $target]);
    }

    public function modifs_dinteraction_target(Request $request)
    {

        $id = $request->id;
        $msg = $request->msg;
        $target = Dinteraction::findOrFail($id);


        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('dinteractions')->where('id', '=', $id)->update(['validated' => -1]);
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new DinteractionTargetToUpdate($target->user, $msg));
        }

        Alert::success('OK !', 'Le Dinteraction Target doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $target]);
    }
    public function modifs_hinteraction_target(Request $request)
    {

        $id = $request->id;
        $msg = $request->msg;
        $target = Hinteraction::findOrFail($id);


        if ($request->temporary) {
            DB::table('temporary_data')->where('id', '=', $id)->update(['validated' => -1]);
        } else {
            DB::table('hinteractions')->where('id', '=', $id)->update(['validated' => -1]);
            //$mail = $target->user->email;
            //Mail::to($mail)->send(new HinteractionTargetToUpdate($target->user, $msg));
        }

        Alert::success('OK !', 'Le Hinteraction Target doit etre corrigée et le rédacteur va être notifié.');
        return response()->json(['id' => $target]);
    }
}
