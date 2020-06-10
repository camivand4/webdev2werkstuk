<?php

namespace App\Http\Controllers;
use App\Page;
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
        $pages = Page::get();

        // $title = 'Privacy';
        $image = 'images/overdrop.png';
        // $message = 'Niet de maker van overdrop';

        return view('pages.privacy', [
            // 'title' => $title,
            'image' => $image,
            // 'message' => $message,
            'pages' => $pages,
        ]);
    }

    public function detailpagina() {
        return view('pages.detailpagina');
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
