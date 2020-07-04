<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        /** Display the users on the dashboard */
        $users = User::role('user')->paginate(10);

        return view('dashboard.users.index',compact('users'));
    }
}
