<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex() {

        $clients = Client::orderBy('id', 'desc') -> get();

        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    public function getCreate() {
        return view('clients.edit', [
            'client' => null
        ]);
    }

    public function getEdit(Client $client) {

        // dd($client -> firstname);

        // return view('clients.edit');
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    public function postSave(Request $r) {
        // dd('We zijn hier aangekomen');
        // dd($request->title);

        $validationRules =  [
            'title' => 'required|in:mr,mw,juf,dr',
            'email' => 'required|email|max:255|unique:clients,email',
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'address' => 'required|max:100',
            'postal_code' => 'required|max:10',
            'city' => 'required|max:50',
            'province' => 'required|max:100'
        ];

        if($r->id) {
            // klant updaten
            $validationRules ['email'] = 'required|email|max:255|unique:clients,email,' . $r->id;
        } else {
            // nieuwe klant
            $validationRules ['email'] = 'required|email|max:255|unique:clients,email';
        }

        $r->validate($validationRules);

        // dd('test succesvol');

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

        if($r->id) {
            $client = Client::where('id', $r->id)->first();
            $client->update($data);
        } else {
            // in de clients tabel steken
            $client = Client::create($data);
        }

        // dd($client);

        return redirect()->route('clients');
    }
}
