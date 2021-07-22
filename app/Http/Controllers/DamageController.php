<?php

namespace App\Http\Controllers;

use App\Models\Part;
use App\Models\Car;
use App\Models\Damage;
use App\Models\Number;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DamageController extends Controller
{

    public function damage_hail(Car $car){

        $parts = Part::all();
        $numbers = Number::all();
        $types = Type::all();
        // $damages = Damage::where('car_id', $car->id)->get();

        return view('damage_hail', compact('car','parts','numbers','types'));
    }


    public function damage_type(Car $car){
        return view('damage_type', compact('car'));
    }


    public function damage_hail_store(Car $car, Request $request){
        $data = request()->validate(
            [
                'part' => ['required'],
                'type' => ['required'],
                'number' => ['required'],
            ]
        );

        $damage = new \App\Models\Damage();

        $damage->damage_type = 1;
        $damage->part_id = $data['part'];
        $damage->type_id = $data['type'];
        $damage->number_id = $data['number'];
        $damage->car_id = $car->id;
        $damage->save();


        return Redirect::route('cars.damage_hail',array('car' => $car->id));

    }

    public function flat_rates(Car $car){
        return view('flat_rates', compact('car'));
    }

    public function flat_rates_store(Car $car){
        $data = request()->validate(
            [
                'parking_damage' => ['required'],
                'disassambly' => ['required'],
                'hail_damage' => ['required'],
            ]
        );

        $damage = new \App\Models\Damage();

        $damage->damage_type = 3;
        $damage->parking_damage = $data['parking_damage'];
        $damage->disassambly = $data['disassambly'];
        $damage->hail_damage = $data['hail_damage'];
        $damage->car_id = $car->id;
        $damage->save();

        return redirect()->route('cars.images', $car->id);

    }

    public function images(Car $car){
        return view('images', compact('car'));
    }

    public function images_store(Car $car, Request $req){

        $req->validate([
            'imageFile' => 'required',
        ]);

        if($req->hasfile('imageFile')) {
            foreach($req->file('imageFile') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);
                $imgData[] = $name;
                // dd($name);
            }
            $car->images = json_encode($imgData);
            $car->save();
        return redirect()->route('clients.cars',$car->client->id);

        // return Redirect::route('cars.damage_hail',array('car' => $car->id));
        }
    }

    public function destroy(Damage $damage)
    {
        $damage->delete();
        session()->flash('user-deleted', 'User deleted: ' . $damage->title);
        return Redirect::back();
    }
}
