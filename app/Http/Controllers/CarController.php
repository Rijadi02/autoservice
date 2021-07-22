<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Client;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Client $client)
    {
        $cars = Car::all();
        return view('cars', compact('cars','client'));
    }


    public function store(Client $client)
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

            ]
        );

        $car = new \App\Models\Car();

        $car->license = $data['license'];
        $car->chassis = $data['chassis'];
        $car->body_type = $data['body_type'];
        $car->brand = $data['brand'];
        $car->model = $data['model'];
        $car->color = $data['color'];
        $car->year = $data['year'];
        $car->fuel = $data['fuel'];
        $car->weight = $data['weight'];
        $car->client_id = $client->id;

        $car->save();
        return redirect()->route('cars.damage_type', $car->id);
    }

    public function update(Car $car)
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

        if ($car->isDirty('license')) {
            session()->flash('car-updated', 'Car updated: ' . request('brand'));
        } else {
            session()->flash('car-updated', 'Nothing to add: ' . request('brand'));
        }
        $car->save();

        return redirect('/cars');
    }

    public function edit(Car $car)
    {
        $cars = Car::all();
        return view('cars', compact('cars', 'car'));
    }

    public function destroy(Car $car)
    {
        $car->delete();
        session()->flash('car-deleted', 'Car deleted: ' . $car->title);
        return redirect('/cars');
    }

    public function user_invoice(Car $car){
        $damages = $car->damages;
        $client = $car->client;
        $time = Carbon::now();
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('user_invoice',compact('car','damages','client','time'));
        return $pdf->download();

    }

}
