<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }


    public function store()
    {
        $data = request()->validate(
            [
                'company' => ['required'],
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'country' => ['required'],
                'street' => ['required'],
                'city' => ['required'],
                'zip' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
                'phone' => ['required'],
            ]
        );

        $client = new \App\Models\Client();

        $client->company = $data['company'];
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->address = $data['address'];
        $client->country = $data['country'];
        $client->street = $data['street'];
        $client->city = $data['city'];
        $client->zip = $data['zip'];
        $client->phone = $data['phone'];



        $client->save();
        return redirect('/clients');
    }

    public function update(Client $client)
    {
        $data = request()->validate(
            [
                'company' => ['required'],
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required'],
                'country' => ['required'],
                'street' => ['required'],
                'city' => ['required'],
                'zip' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required'],
            ]
        );


        $client->company = $data['company'];
        $client->name = $data['name'];
        $client->email = $data['email'];
        $client->address = $data['address'];
        $client->country = $data['country'];
        $client->street = $data['street'];
        $client->city = $data['city'];
        $client->zip = $data['zip'];
        $client->phone = $data['phone'];


        if ($client->isDirty('name')) {
            session()->flash('client-updated', 'Client updated: ' . request('name'));
        } else {
            session()->flash('client-updated', 'Nothing to add: ' . request('name'));
        }
        $client->save();

        return redirect('/clients');
    }

    public function edit(Client $client)
    {
        $clients = Client::all();
        return view('clients', compact('clients', 'client'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        session()->flash('client-deleted', 'Client deleted: ' . $client->name);
        return redirect('/clients');
    }
}
