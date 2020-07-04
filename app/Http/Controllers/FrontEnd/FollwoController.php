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
        /** Get the user */
        $user = Auth::user();

        /** Find the chosen series  */
        $series = Series::find( $request->series_id );

        /** check if the user are following the series already if it's unfollow */
        foreach($user->series as $ser)
        {
            if($series->id === $ser->id)
            {
                /** remove the relation between the user and the series  */
                $user->series()->detach($series);
                return back();
            }
        }
        /** make the relation between the user and the series */
        $user->series()->attach($series);
        $user->save();

        return  back();
        
    }
}
