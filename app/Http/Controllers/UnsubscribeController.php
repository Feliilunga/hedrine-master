<?php

namespace App\Http\Controllers;

use App\Mail\Unsubscribe;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UnsubscribeController extends Controller
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

    //
    public function unsubscribe()
    {
        $id = Auth::id();
        $mail = Auth::user()->email;
        $user = Auth::user();

        Mail::to($mail)->send(new Unsubscribe($user));

        User::findOrFail($id)->delete();

        return redirect('/');
    }
}
