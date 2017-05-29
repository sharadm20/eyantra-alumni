<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AccountCreate extends Mailable
{
    use Queueable, SerializesModels;
    public $email,$password;

    /**
     * Create a new message instance.

     *
     * @return void
     */
    public function __construct($user)

    {
        $this->email=$user['email'];
        $this->password=$user['password'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.notify');
    }
}
