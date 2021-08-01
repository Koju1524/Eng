<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Models\Vocabulary;
use App\Mail\VocabularySend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VocabularySendController extends Controller
{
    protected $vocabulary;

    /**
     * Send email about vocab to user
     *
     * @param integer $vocabularyId
     * @return void
     */
    public function sendMail($vocabularyId)
    {
        $vocabulary = Vocabulary::find($vocabularyId);
        $user_mail = Auth::user()->email;
        Mail::to($user_mail)->send( new VocabularySend($vocabulary));
        return redirect()->route('vocabulary.index');
    }
}
