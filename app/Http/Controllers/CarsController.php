<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Client;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Client $client)
    {
        $cars = Cars::all();
        return view('cars', compact('cars','client'));
    }


    public function store()
    {
        $data = request()->validate(
            [
                'license' => ['required'],
                'chassis' => ['required'],
                'body_type' => ['required'],
                'brand' => ['required'],
                'model' => ['required'],
                'color' => ['required'],
                'year' => [''],
                'fuel' => [''],
                'weight' => [''],
                'client_id' => ['required']
            ]
        );

        $car = new \App\Models\Cars();

        $car->license = $data['license'];
        $car->chassis = $data['chassis'];
        $car->body_type = $data['body_type'];
        $car->brand = $data['brand'];
        $car->model = $data['model'];
        $car->color = $data['color'];
        $car->year = $data['year'];
        $car->fuel = $data['fuel'];
        $car->weight = $data['weight'];
        $car->client_id = $data['client_id'];

        $car->save();
        return redirect('/cars');
    }

    public function update(Cars $car)
    {
        $data = request()->validate(
            [
                'license' => ['required'],
                'chassis' => ['required'],
                'body_type' => ['required'],
                'brand' => ['required'],
                'model' => ['required'],
                'color' => ['required'],
                'year' => [''],
                'fuel' => [''],
                'weight' => [''],
                'client_id' => ['required']
            ]
        );



        $car->license = $data['license'];
        $car->chassis = $data['chassis'];
        $car->body_type = $data['body_type'];
        $car->brand = $data['brand'];
        $car->model = $data['model'];
        $car->color = $data['color'];
        $car->year = $data['year'];
        $car->fuel = $data['fuel'];
        $car->weight = $data['weight'];
        $car->client_id = $data['client_id'];

        if ($car->isDirty('license')) {
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
