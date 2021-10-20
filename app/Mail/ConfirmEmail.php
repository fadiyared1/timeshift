<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class ConfirmEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $link;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($link)
    {
        $this->link = $link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       /* return (new MailMessage)
            ->subject(Lang::get('Confirm Account Notification'))
            ->line(Lang::get('You are receiving this email because you need to confirm your account.'))
            ->action(Lang::get('Confirm Account'), 'SS')
            ->line(Lang::get('This confirmation link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('If you did not request a confirmation, no further action is required.'));*/
            //return("Hello World");
            return $this
            ->subject('User Confirmation')
            ->view('auth/passwords.conflink',['link' => $this->link]);
        
    }
}
