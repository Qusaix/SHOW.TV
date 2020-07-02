<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Episode;
use App\Reactions;

class ReactionController extends Controller
{
    public function reaction( Request $request )
    {
        
        $curent_user = Auth::user();
        $chosen_episode = Episode::find( $request->episode );
        $check_reaction = Reactions::where([
            ['user_id', '=', $curent_user->id],
            ['episode_id', '=', $request->episode],
        ])->first();


        if( empty($check_reaction) )
        {
            $new_reaction = new Reactions;
            $new_reaction->like = $request->reaction;
            $new_reaction->user()->associate( $curent_user );
            $new_reaction->episode()->associate( $chosen_episode );
            $new_reaction->save();

            return back();
        }
        else
        {
            if( $check_reaction->like !== $request->reaction )
            {
                $check_reaction->like = $request->reaction;
                $check_reaction->save();
                return back();
            }

            return back();
        }


        
    }
}
