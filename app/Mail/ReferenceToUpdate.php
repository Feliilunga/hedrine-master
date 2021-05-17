<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ReferenceToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $message)
    {
        $this->message = $message;
        $this->user  = $user;
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

        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre Reference doit etre modifié')
            ->view('mail.updateHerb', compact('admin','username', 'msg'));
    }
}
