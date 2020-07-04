<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Series;
use Auth;

class SeriesController extends Controller
{
    public function index( $id )
    {   
        /** Show 5 Random Series on the nav bar */
        $randomSeries = Series::inRandomOrder()->select('title','id')->limit(5)->get();

        /** find the chosen series */
        $series = Series::find( $id );

        /** get the series episodes */
        $episodes = $series->episode;

        /** see if the user is following the series */
        $check_user_following = Auth::user()->check_if_following( Auth::user()->series , $series->id);
       

        return view('series.index',compact('randomSeries','series','episodes','check_user_following'));
    }
}
