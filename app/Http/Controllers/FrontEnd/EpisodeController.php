<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;
use App\Series;

class EpisodeController extends Controller
{
    public function index( $id )
    {   
        
        $episode = Episode::find( $id );

        $show_episodes =  $episode->series->episode;
        $randomSeries = Series::all()->random();


        return view('series.index', compact( 'episode' , 'show_episodes' , 'randomSeries' ) );
    }
}
