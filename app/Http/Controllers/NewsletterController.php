<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
// use App\Services\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
   public function __invoke(MailchimpNewsletter $newsletter) {


        request()->validate([
            'email' => ['required', 'email']
        ]);
        try {
            $newsletter->subscribe(request('email'));
        } catch(Exception $e) {
            throw ValidationException::withMessages(['email' => 'This is email could not be added to our newsletter']);
        }
        return redirect('/')->with('success', 'You are now signed up for our newsletter');
   }
}
