<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $first_name, $last_name, $subject, $msg)
    {
        $this->email      = $email;
        $this->first_name = $first_name;
        $this->last_name  = $last_name;
        $this->subject    = $subject;
        $this->msg        = $msg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)
                    ->replyTo($this->email)
                    ->text('mails.contact-request', [
                        'first_name' => $this->first_name,
                        'last_name'  => $this->last_name,
                        'msg'        => $this->msg,
                    ]);
    }
}
