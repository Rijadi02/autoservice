<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Prototype;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function prototypes()
    {
        $brands = Brand::all();
        $prototypes = Prototype::all();
        return view('prototypes', compact('prototypes', 'brands'));
    }
    public function prototypes_store()
    {
        $data = request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'brands_id' => ['required'],

            ]
        );
        $prototype = new \App\Models\Prototype();
        $prototype->name = $data['name'];
        $prototype->brand_id = $data['brands_id'];

        $prototype->save();
        return redirect('/prototypes');
    }

    public function prototypes_destroy(Prototype $prototype)
    {
        $prototype->delete();
        session()->flash('model-deleted', 'Model deleted: ' . $prototype->name);
        return redirect('/prototypes');
    }



    public function brands()
    {
        $brands = Brand::all();
        return view('brands', compact('brands'));
    }
    public function brands_store()
    {
        $data = request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
            ]
        );
        $brand = new \App\Models\Brand();
        $brand->name = $data['name'];
        $brand->save();
        return redirect('/brands');
    }

    public function brands_destroy(Brand $brand)
    {
        $brand->delete();
        session()->flash('body-deleted', 'Body deleted: ' . $brand->name);
        return redirect('/brands');
    }
}
