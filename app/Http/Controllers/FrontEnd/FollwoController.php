<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Series;
use Auth;
class FollwoController extends Controller
{
    public function follwo_button( Request $request )
    {
        $user = Auth::user();
        $series = Series::find( 1 );

        foreach($user->series as $ser)
        {
            if($series->id === $ser->id)
            {
                $user->series()->detach($series);
                return back();
            }
        }
        $user->series()->attach($series);
        $user->save();

        return  back();
        
    }
}
