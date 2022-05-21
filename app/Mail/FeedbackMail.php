<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use app\Models\Feedback;
use app\Models\User;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user;
    private $feedback;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Feedback $feedback, User $user)
    {
        $this->user = $user;
        $this->feedback = $feedback;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.feedback')->with([
            'user' => $this->user,
            'feedback' => $this->feedback
        ]);
    }
}
