<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function registration()
    {
        return view('auth.registration');
    }

    public function postRegistration(Request $request) 
    {
        //dd($request->all());
        $request->validate([
            'name' => 'required',
            'middle_name' => 'required', //
            'last_name' => 'required', //
            'birth_date' => 'required|date_format:Y-m-d',//
            'user_type_id' => 'required', //
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();
        $data['birth_date'] = date('Y-m-d', strtotime($data['birth_date']));
        $createUser = $this->create($data);
        return redirect('login')->withSuccess('You have registered successfully.');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'middle_name' => $data['middle_name'], //
            'last_name' => $data['last_name'], //
            'birth_date' => $data['birth_date'], //
            'user_type_id' => $data['user_type_id'],
            'branch_assigned' => $data['branch_assigned'], //
            'full_address' => $data['full_address'], //
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $checkLoginCredentials = $request->only('email', 'password');
        if(Auth::attempt($checkLoginCredentials)){
            return redirect('dashboard')->withSuccess('You are successfully logged in.');
        }
        return redirect('login')->withSuccess('Login Credentials are incorrect.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
        return redirect('login')->withSuccess('Please Login First.');
    }

}
