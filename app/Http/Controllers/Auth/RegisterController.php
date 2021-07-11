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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {

    //     Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //         'address' => ['required'],
    //         'country' => ['required'],
    //         'street' => ['required'],
    //         'city' => ['required'],
    //         'zip' => ['required'],
    //         'tel' => ['required'],
    //         'currency' => ['required'],
    //         'tarif' => ['required'],
    //         'bank' => ['required'],
    //         'role_id' => ['required'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     dd('hajde');
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'address' => $data['address'],
    //         'country' => $data['country'],
    //         'zip' => $data['zip'],
    //         'city' => $data['city'],
    //         'street' => $data['street'],
    //         'tel' => $data['tel'],
    //         'currency' => $data['currency'],
    //         'tarif' => $data['tarif'],
    //         'bank' => $data['bank'],
    //         'terms' => 1,
    //         'role_id' => $data['role_id'],



    //     ]);
    // }

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
        return redirect('/login');
    }
}
