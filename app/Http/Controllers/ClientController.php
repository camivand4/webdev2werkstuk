<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getIndex() {
        return view('clients.index', [
            'clients' => Client::all()
        ]);
    }

    public function getCreate() {
        return view('clients.edit');
    }

    public function getEdit($id) {
        return view('clients.edit');
    }

    public function postSave(Request $r) {
        // dd('We zijn hier aangekomen');
        // dd($request->title);

        $r->validate([
            'title' => 'required|in:mr,mw,juf,dr',
            'email' => 'required|email|max:255|unique:clients,email',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:100'
        ]);

        $data = [
            'title' => $r->title,
            'email' => $r->email,
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'address' => $r->address,
            'postal_code' => $r->postal_code,
            'city' => $r->city,
            'province' => $r->province,
        ];

        // in de clients tabel steken
        $client = Client::create($data);
        // dd($client);

        return redirect()->route('clients');
    }
}
