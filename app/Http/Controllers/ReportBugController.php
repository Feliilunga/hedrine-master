<?php

namespace App\Http\Controllers;

use App\Mail\ReportBugSender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReportBugController extends Controller
{


    public function store(Request $request){ 

        $data = [
            "email"     => Auth::user()->email,
            "route"     => $request->route,
            "subject"   => $request->sujet, 
            "desc"      => $request->desc
        ];

        Mail::to('david.dubois@ulb.be')->send(new ReportBugSender($data));
        return true;
    }
}
