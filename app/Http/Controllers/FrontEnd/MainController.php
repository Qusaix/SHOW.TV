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
        $episodes = Episode::orderBy('created_at', 'desc')->get();
        $series = Series::get();
        $randomSeries = (object) array(
            'id' => '0'
        );
        $seriesAll = Series::get();

        if($seriesAll->count() >= 5)
        {
            $randomSeries = Series::all()->random(5);

        }

        return view('welcome' , compact('episodes','series','randomSeries'));
    }

}
