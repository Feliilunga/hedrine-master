<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class TargetToUpdate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($target, $user, $message)
    {
        $this->target = $target;
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
        $target = $this->target;
        $username = $this->user->name . " " . $this->user->firstname;

        $msg = $this->message;

        return $this->from($admin->email)
            ->subject('Hedrine : Votre cible(Target) doit etre modifié')
            ->view('mail.updateTarget', compact('admin', 'target', 'username', 'msg'));
    }
}
