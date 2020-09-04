<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificationExpiryEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $certification;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($certification)
    {
        $this->certification = $certification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->view('/employee.addDoc')
            ->to('demo@email.com', 'Admin')
            ->subject('Certification Expiry Notification');
            
    }
}
