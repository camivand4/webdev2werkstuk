<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {
        return view('reservations.index', []);
    }

    public function getCreate() {

        $rooms = Room::get();


        return view('reservations.edit', [
            'rooms' => $rooms
        ]);
    }

    public function getEdit($id) {
        return view('reservations.edit', []);
    }

    public function postSave(Request $request) {
        // @todo post request naar db wegschrijven
        // adhv een model
    }
}
