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
        /*** Get all the episodes  */
        $episodes = Episode::orderBy('created_at', 'desc')->get();

        /** Show 5 Random Series on the nav bar */
        $randomSeries = Series::inRandomOrder()->select('title','id')->limit(5)->get();

        return view('welcome' , compact('episodes','randomSeries'));
    }

}
