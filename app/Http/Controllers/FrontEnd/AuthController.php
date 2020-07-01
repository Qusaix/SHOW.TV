<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserStoreRequest;
use App\Http\Requests\Auth\UserLoginRequest;

use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function rigster()
    {
        return view('auth.rigster');
    }

    public function store( UserStoreRequest $request )
    {
        /** CREATEING USER */

        $newUser = new User;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->name = $request->name;
        $newUser->image = "testLink";
        $newUser->save();

        return redirect()->route('frontend');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function login_button( UserLoginRequest $request )
    {
        
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect()->route('frontend');
        }
        else
        {
            return back()->withErrors(['something wrong'=>'the email or password are incorrect']);
        }
    }

    public function logout()
    {
         Auth::logout();
         return redirect()->route('login');
    }
}
