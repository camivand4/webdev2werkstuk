<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Newsletter\NewsletterFacade as Newsletter;

class NewsLetterController extends Controller
{
    public function getmailchimp() {
        return view('pages.mailchimp');
    }

    public function postmailchimp(Request $r) {
        Newsletter::subscribeOrUpdate($r->email);

        return redirect('/subscribed');
    }
}
