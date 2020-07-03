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
        $randomSeries = (object) array(
            'id' => '0'
        );
        $seriesAll = Series::get();

        if($seriesAll->count() > 0)
        {
            $randomSeries = Series::all()->random();

        }
        $series = Series::find( $id );
        $episodes = $series->episode;
        $check_user_following = Auth::user()->check_if_following( Auth::user()->series , $series->id);
       

        return view('series.index',compact('randomSeries','series','episodes','check_user_following'));
    }
}
