<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Damage;
use Illuminate\Http\Request;

class DamageController extends Controller
{

    public function damage_hail(Cars $car){
        return view('damage_hail', compact('car'));
    }


    public function damage_type(Cars $car){
        return view('damage_type', compact('car'));
    }

    public function damage_hail_store(Cars $car, Request $request){
        dd($request);
        $data = request()->validate(
            [
                '' => ['required'],
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
        $car->client_id = $client->id;

        $car->save();
        return redirect('/cars');
    }
}
