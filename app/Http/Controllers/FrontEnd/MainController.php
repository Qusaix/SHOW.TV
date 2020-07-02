<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;
use App\Series;

class MainController extends Controller
{
    

    public function index()
    {
        $episodes = Episode::get();
        $series = Series::get();
        $randomSeries = Series::all()->random();

        return view('welcome' , compact('episodes','series','randomSeries'));
    }

}
