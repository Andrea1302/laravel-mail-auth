<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VideogameDeleteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     public $videogame;
     public $user;

    public function __construct($videogame,$user)
    {
        $this -> videogame = $videogame;
        $this -> user = $user;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this        ->from('no-reply@miosito.com')
        
        
                            ->view('mail.VideogameDeleteMail');
    }
}
