<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getIndex() {

        $title = 'Overdrop';
        $image = 'images/overdrop.png';
        $message = 'Overdrop is an awesome app to see the weather.
        Camille Van Damme';

        return view('pages.test', [
            'title' => $title,
            'image' => $image,
            'message' => $message
        ]);
    }
}
