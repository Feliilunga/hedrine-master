<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;
use App\Herb;
use Illuminate\Support\Facades\Auth;

class HerbToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $message;
    public $herb;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $message,$herb)
    {
        $this->message = $message;
        $this->user  = $user;
        $this->herb  = $herb;
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
        $herb = $this->herb;
        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre plante doit etre modifié')
            ->view('mail.updateHerb', compact('admin','username', 'msg','herb'));
    }
}
