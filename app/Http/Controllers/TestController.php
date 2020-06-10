<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test2() {
        $title = 'test2';
        $image = 'images/overdrop.png';
        $message = 'still test 2';

        return view('pages.test', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);
    }

    public function subscribed() {
        $title = 'Hoera';
        $image = 'images/overdrop.png';
        $message = "You've been subscribed!!!";

        return view('pages.test', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);

        return view('pages.subscribedtonewsletter');
    }
}
