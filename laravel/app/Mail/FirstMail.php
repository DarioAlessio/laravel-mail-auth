<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FirstMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $firstString;

    public function __construct($firstString)
    {
        $this -> firstString = $firstString;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this-> from('giggi@laravel.com')->view('mail.first-mail');
    }
}
