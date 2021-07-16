<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }


    public function store()
    {
        $data = request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'address' => ['required'],
                'country' => ['required'],
                'street' => ['required'],
                'city' => ['required'],
                'zip' => ['required'],
                'tel' => ['required'],
                'currency' => ['required'],
                'tariff' => ['required'],
                'bank' => ['required'],
                'role_id' => ['required'],
            ]
        );

        $user = new \App\Models\User();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->address = $data['address'];
        $user->country = $data['country'];
        $user->street = $data['street'];
        $user->city = $data['city'];
        $user->zip = $data['zip'];
        $user->tel = $data['tel'];
        $user->currency = $data['currency'];
        $user->tariff = $data['tariff'];
        $user->bank = $data['bank'];
        $user->role_id = $data['role_id'];
        $user->terms = 1;


        $user->save();
        return redirect('/users');
    }

    public function update(User $user)
    {
        $data = request()->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                // 'password' => ['required', 'string', 'min:8'],
                'address' => ['required'],
                'country' => ['required'],
                'street' => ['required'],
                'city' => ['required'],
                'zip' => ['required'],
                'tel' => ['required'],
                'currency' => ['required'],
                'tariff' => ['required'],
                'bank' => ['required'],
                // 'role_id' => ['required'],
            ]
        );


        $user->name = $data['name'];
        // $user->email = $data['email'];
        // $user->password = Hash::make($data['password']);
        $user->address = $data['address'];
        $user->country = $data['country'];
        $user->street = $data['street'];
        $user->city = $data['city'];
        $user->zip = $data['zip'];
        $user->tel = $data['tel'];
        $user->currency = $data['currency'];
        $user->tariff = $data['tariff'];
        $user->bank = $data['bank'];
        // $user->role_id = $data['role_id'];
        $user->terms = 1;

        if ($user->isDirty('name')) {
            session()->flash('user-updated', 'User updated: ' . request('name'));
        } else {
            session()->flash('user-updated', 'Nothing to add: ' . request('name'));
        }
        $user->save();

        return redirect('/users');
    }

    public function edit(User $user)
    {
        $users = User::all();
        return view('users', compact('users', 'user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        session()->flash('user-deleted', 'User deleted: ' . $user->title);
        return redirect('/users');
    }
}
