<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;

class MainController extends Controller
{
    

    public function index()
    {
        $episodes = Episode::get();

        return view('welcome' , compact('episodes'));
    }

}
