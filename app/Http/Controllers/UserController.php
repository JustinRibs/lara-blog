<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // show signup page
    public function signup(){
        return view('users.signup');
    }
    // create new user
    public function create(Request $request){
        $formFields = $request->validate([
            'name' => 'required|unique:App\Models\User,name',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required',
          ]);
        //   hash password
        $formFields['password'] = bcrypt($formFields['password']);
        // create user
        $user = User::create($formFields);
        auth()->login($user);

        return redirect('/');
    }
    // logout user
    public function logout(Request $request){
        auth()->logout();
        // invalidate the session
        $request->session()->invalidate();
        // regenerate token
        $request->session()->regenerateToken();

        return redirect('/');
        }
    // show login page
    public function login(){
        return view('users.login');
    }

    // log user in
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/');
        }
        return back()->withErrors(['email' => 'Does not match our records']);
    }
}
