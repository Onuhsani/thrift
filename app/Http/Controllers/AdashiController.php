<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdashiController extends Controller
{
    

    public function index()
    {
        return view('auth.login');
    }


    public function userLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $params = $request->only('email', 'password');
        if (Auth::attempt($params)){
            return redirect()->intended('dashboard')->withsucess('Signed in');
        }

        return redirect("login")->withsucess('Login details are not valid');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function userRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:15',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withsucess('Welcome');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }


    public function dashboard()
    {
        //if(Auth::check()){
            return view('dashboard');
       // }

        //return redirect('login')->withsucess('Sorry, but you can\'t access this page');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }


    public function deposit()
    {
        return view('addmoney');
    }

    public function addMoney()
    {
        return 5;
    }

    public function withdraw()
    {
        return view('withdraw');
    }

    public function withdrawMoney()
    {
        return 5;
    }


}
