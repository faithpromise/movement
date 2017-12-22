<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageReceived extends Mailable {
    use Queueable, SerializesModels;

    public $the_message;

    /**
     * Create a new message instance.
     *
     * @param $the_message
     */
    public function __construct($the_message) {
        $this->the_message = $the_message;
        $this->the_message->phone = $this->formatPhone($this->the_message->phone);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this
            ->from('noreply@faithpromise.org')
            ->subject('Movement Inquiry from ' . $this->the_message->name)
            ->view('emails.message-received');
    }

    private function formatPhone($phone) {
        $new_phone = preg_replace('/[^0-9]/', '', '(865) 973-2311');

        if (strlen($new_phone) == 7)
            return preg_replace("/(\d{3})(\d{4})/", "$1-$2", $new_phone);
        elseif (strlen($new_phone) == 10)
            return preg_replace("/(\d{3})(\d{3})(\d{4})/", "($1) $2-$3", $new_phone);
        else
            return $phone;
    }

}
