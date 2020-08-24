<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function about() {
        $langueEnglish = true;

        if($langueEnglish == true) {
            $title = 'About';
            $image = 'images/overdrop.png';
            $message = 'link to overdrop https://play.google.com/store/apps/details?id=widget.dd.com.overdrop.free&hl=en';
        } else {
            $title = 'Over';
            $image = 'images/overdrop.png';
            $message = 'link naar overdrop https://play.google.com/store/apps/details?id=widget.dd.com.overdrop.free&hl=en';
        }

        return view('pages.pagina', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);
    }

    public function privacy() {
        $pages = Page::get();

        $image = 'images/overdrop.png';

        return view('pages.privacy', [
            'image' => $image,
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

        return view('pages.pagina', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);

        return view('pages.subscribedtonewsletter');
    }
}
