<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $nameIn;
    public $emailIn;
    public $messageIn;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nameIn, $emailIn, $messageIn)
    {
        $this->nameIn = $nameIn;
        $this->emailIn = $emailIn;
        $this->messageIn = $messageIn;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('New site visitor')
            ->view('emails.contact')
            ->with(['nameIn' => $this->nameIn, 'emailIn' => $this->emailIn, 'messageIn' => $this->messageIn]);
    }
}
