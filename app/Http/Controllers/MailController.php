<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getContact() {
        return view('pages.contact');
    }

    public function postContact(Request $r) {
        $data = [
            'name' => $r->name,
            'email' => $r->email,
            'onderwerp' => $r->onderwerp,
            'content' => $r->content,
        ];

        // return view("mails.contact", $data);

        // die();

        Mail::send('mails.contact', $data, function ($message) use($r){
            $message->sender('camivand4@student.arteveldehs.be');
            $message->cc('camivand4@student.arteveldehs.be');
            $message->to($r->email, $r->name);
            $message->subject($r->onderwerp);
            // $message->priority(3);
            // $message->attach('pathToFile');
        });
    }
}
