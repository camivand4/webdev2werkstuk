<?php

namespace App\Http\Controllers;

use App\Olliebollie;
use Illuminate\Http\Request;

class OlliebollieController extends Controller
{
    public function getOlliebollie($slug) {
        $olliebollie = Olliebollie::where('slug', $slug)->first();
        if(!$olliebollie) abort('404');

        // dd($olliebollie);

        return view('olliebollies.' . $olliebollie->Template,  [
            'olliebollie' => $olliebollie
            ]);
        }
}
