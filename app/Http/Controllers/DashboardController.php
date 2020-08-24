<?php

namespace App\Http\Controllers;

use App\Olliebollie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function getIndexOlliebollies () {
        $olliebollies = Olliebollie::all();

        return view('dashboard.olliebollies.index', [
            'olliebollies' => $olliebollies
            ]
        );
    }

    public function getCreateOlliebollie(Olliebollie $olliebollie) {
        return view('dashboard.olliebollies.create', []
        );
    }

    public function postCreateOlliebollie(Request $r) {
        $olliebollie = new Olliebollie();
        $olliebollie->title = $r->title;
        $olliebollie->slug = Str::snake($r->title);
        $olliebollie->intro = $r->intro;
        $olliebollie->content = $r->content;
        $olliebollie->Template = $r->Template;
        $olliebollie->save();

        return redirect()->route('dashboard.olliebollies.index');
    }

    public function getEditOlliebollie(Olliebollie $olliebollie) {
        return view("dashboard.olliebollies.edit", ['olliebollie' => $olliebollie]);
    }

    public function postEditOlliebollie(Olliebollie $olliebollie, Request $r) {
        if($r->id != $olliebollie->id) abort("403", "sloeber dat mag niet");

        $olliebollie->title = $r->title;
        $olliebollie->slug = Str::snake($r->title);
        $olliebollie->intro = $r->intro;
        $olliebollie->content = $r->content;
        $olliebollie->Template = $r->Template;
        $olliebollie->save();

        return redirect()->route('dashboard.olliebollies.index');
    }

    public function postDeleteOlliebollie(Olliebollie $olliebollie) {

    }

}
