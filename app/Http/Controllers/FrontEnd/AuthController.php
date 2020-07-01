<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\UserStoreRequest;
use App\User;

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
}
