<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Cars::all();
        return view('cars', compact('cars'));
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
                'email' => ['required', 'string', 'email', 'max:255'],
                'phone' => ['required'],
            ]
        );

        $car = new \App\Models\Cars();

        $car->company = $data['company'];
        $car->name = $data['name'];
        $car->email = $data['email'];
        $car->address = $data['address'];
        $car->country = $data['country'];
        $car->street = $data['street'];
        $car->city = $data['city'];
        $car->zip = $data['zip'];
        $car->phone = $data['phone'];



        $car->save();
        return redirect('/cars');
    }

    public function update(Cars $car)
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


        $car->company = $data['company'];
        $car->name = $data['name'];
        $car->email = $data['email'];
        $car->address = $data['address'];
        $car->country = $data['country'];
        $car->street = $data['street'];
        $car->city = $data['city'];
        $car->zip = $data['zip'];
        $car->phone = $data['phone'];


        if ($car->isDirty('name')) {
            session()->flash('client-updated', 'Client updated: ' . request('name'));
        } else {
            session()->flash('client-updated', 'Nothing to add: ' . request('name'));
        }
        $car->save();

        return redirect('/cars');
    }

    public function edit(Cars $car)
    {
        $cars = Cars::all();
        return view('cars', compact('cars', 'car'));
    }

    public function destroy(Cars $car)
    {
        $car->delete();
        session()->flash('car-deleted', 'Car deleted: ' . $car->title);
        return redirect('/clients');
    }
}
