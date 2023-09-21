<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OtpEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $token;
    public $get_user_name;

    /**
     * Create a new message instance.
     *
     * @param  int  $token
     * @return void
     */
    public function __construct($token, $get_user_name)
    {
        $this->token = $token;
        $this->get_user_name = $get_user_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.resend')
            ->subject('ReSend Verify Account')
            ->with([
                'token' => $this->token,
            ]);
    }
}
