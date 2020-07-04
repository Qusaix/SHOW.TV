<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;
use App\Series;
use App\Reactions;
use Auth;

class EpisodeController extends Controller
{
    public function index( $id )
    {   
        /** Find the episode to show it */
        $episode = Episode::find( $id );

        /** Check if the logged user have done any reaction ex.like,dislike */
        $ep_check_reaction = $episode->check_reactions( Auth::user()->id , $episode->id );

        /** This is More Episodes of the same show */
        $show_episodes =  $episode->series->episode;

        /** Show 5 Random Series on the nav bar */
        $randomSeries = Series::inRandomOrder()->select('title','id')->limit(5)->get();

        
        /** return the view with all the vars above */
        return view('episode.index', compact( 'episode' , 'show_episodes' , 'randomSeries' , 'ep_check_reaction') );
    }
}
