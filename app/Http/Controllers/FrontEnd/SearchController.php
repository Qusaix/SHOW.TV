<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Series;
use App\Episode;

class SearchController extends Controller
{
    public function index( Request $request )
    {
        $randomSeries = (object) array(
            'id' => '0'
        );
        $seriesAll = Series::get();

        if($seriesAll->count() > 0)
        {
            $randomSeries = Series::all()->random();

        }

        $user_Input = $request->search;

       $data =  Series::where('title', 'LIKE', '%' .$user_Input. '%') 
            ->orWhereHas('Episode', function($q) use ($user_Input) {
                return $q->where('title', 'LIKE', '%' . $user_Input . '%');
            })
            ->get();

           


        return view('search.index',compact('randomSeries','data'));
    }
}
