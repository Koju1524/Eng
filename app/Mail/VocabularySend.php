<?php

namespace App\Mail;

use App\Models\Vocabulary;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VocabularySend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The vocabulary instance.
     *
     * @var vocabulary
     */
    protected $vocabulary;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($vocabulary)
    {
        $this->vocabulary = $vocabulary;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('English_app@example.com') //override?? .env (MAIL_FROM_ADDRESS)
              ->subject('New Vocabulary')
              ->view('emails.vocabularySend')
              ->with([
                  'vocabulary' => $this->vocabulary,
              ]);
    }
}