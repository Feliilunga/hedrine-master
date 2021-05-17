<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class DrugToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;
    public $drug;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $message, $drug)
    {
        $this->message = $message;
        $this->user  = $user;
        $this->drug = $drug;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $admin = Auth::user();
        $username = $this->user->name." ".$this->user->firstname;
        $drug = $this->drug;
        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre Médicament (DCI) doit etre modifié')
            ->view('mail.updateDrug', compact('admin','username', 'msg','drug'));
    }
}
