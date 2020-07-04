<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserStoreRequest;
use App\Http\Requests\Auth\UserLoginRequest;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use App\Traits\Helpers;
use App\User;


class AuthController extends Controller
{
    /** This heleper where i put the upload file function with create time fromate*/
    use Helpers;

    public function rigster()
    {
        return view('auth.rigster');
    }

    public function store( UserStoreRequest $request )
    {

        /** CREATEING USER */

        $normal_user_role = Role::find(2);

        $newUser = new User;
        $newUser->email = $request->email;
        $newUser->password = bcrypt($request->password);
        $newUser->name = $request->name;
        $newUser->image = $this->uploadfiles("profileImages",$request->image);
        $newUser->save();

        /** Assign the Normal User Role to the new user */
        $newUser->assignRole($normal_user_role);


        /** Redirecting the user to login page after rigstering */
        return redirect()->route('login');
    }

    public function login()
    {
        /** Go To Login Page */
        return view('auth.login');
    }

    public function login_button( UserLoginRequest $request )
    {
        /**  Take User Credentials */
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            /** if the user is the admin  redirect to the dashboard*/
            if(Auth::user()->roles[0]->name == "admin")
            {
                return redirect()->route('dashboard.users');
            }

            /** Normal User Go to the Main Page */
            return redirect()->route('frontend');
        }
        else
        {
            /** if there credentials is wrong return with an error massage */
            return back()->withErrors(['something wrong'=>'the email or password are incorrect']);
        }
    }

    public function logout()
    {
         Auth::logout();
         return redirect()->route('login');
    }
}
