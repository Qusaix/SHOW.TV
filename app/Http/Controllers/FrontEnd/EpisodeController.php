<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;

class EpisodeController extends Controller
{
    public function index( $id )
    {   
        
        $episode = Episode::find( $id );

        $show_episodes =  $episode->series->episode;

        return view('series.index', compact( 'episode' , 'show_episodes' ) );
    }
}
