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
        /** Show 5 Random Series on the nav bar */
        $randomSeries = Series::inRandomOrder()->select('title','id')->limit(5)->get();

        /** get the user input */
        $user_Input = $request->quere;

      
            /** search the series and the episods if there is any match */
           $data =  Series::where('title', 'LIKE', '%' .$user_Input. '%')
            ->orWhereHas('Episode', function($q) use ($user_Input) {
                return $q->where('title', 'LIKE', '%' . $user_Input . '%');
            })->get();


            

           


        return view('search.index',compact('randomSeries','data'));
    }
}
