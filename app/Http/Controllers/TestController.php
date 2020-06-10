<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function about() {
        $title = 'About';
        $image = 'images/overdrop.png';
        $message = 'link to overdrop https://play.google.com/store/apps/details?id=widget.dd.com.overdrop.free&hl=en';

        return view('pages.test', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);
    }

    public function privacy() {
        $title = 'Privacy';
        $image = 'images/overdrop.png';
        $message = 'Niet de maker van overdrop';

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
