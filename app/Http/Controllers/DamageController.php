<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Damage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DamageController extends Controller
{

    public function damage_hail(Cars $car){
        return view('damage_hail', compact('car'));
    }


    public function damage_type(Cars $car){
        return view('damage_type', compact('car'));
    }

    public function damage_hail_store(Cars $car, Request $request){
        $data = request()->validate(
            [
                'body_part' => ['required'],
                'hole_type' => ['required'],
                'hole_number' => ['required'],
            ]
        );

        $damage = new \App\Models\Damage();

        $damage->damage_type = 1;
        $damage->body_part = $data['body_part'];
        $damage->hole_type = $data['hole_type'];
        $damage->hole_number = $data['hole_number'];
        $damage->car_id = $car->id;
        $damage->save();


        return Redirect::route('cars.damage_hail',array('car' => $car->id));

    }
}
