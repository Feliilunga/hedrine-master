<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReportBugSender extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->data = $request; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->data); 
        return $this->from('hedrinenoreply_contactBUGform@hedrine.be')
                    ->subject('Hedrine: Report bug formulaire')
                    ->with('data', $this->data)
                    ->markdown('mail.reportbug');
    }
}
