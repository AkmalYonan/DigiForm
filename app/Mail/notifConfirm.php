<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class notifConfirm extends Mailable
{
    use Queueable, SerializesModels;

    public $pesan;

    /**
     * Create a new message instance.
     *
     * 
     */
    public function __construct($pesan)
    {
        $this->pesan = $pesan;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.notifconfirm')
            ->subject('New Order')
            ->with([
                'pesan' => $this->pesan,
            ]);
    }
}
