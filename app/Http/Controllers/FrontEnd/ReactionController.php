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
        /** Get the user */
        $curent_user = Auth::user();

        /** find the chosen episode */
        $chosen_episode = Episode::find( $request->episode );

        /** See if the user have done any reaction to it */
        $check_reaction = Reactions::where([
            ['user_id', '=', $curent_user->id],
            ['episode_id', '=', $request->episode],
        ])->first();

        /** if there is no reaction create one */
        if( empty($check_reaction) )
        {
            $new_reaction = new Reactions;
            $new_reaction->like = $request->reaction;
            $new_reaction->user()->associate( $curent_user );
            $new_reaction->episode()->associate( $chosen_episode );
            $new_reaction->save();

            return response()->json([
                "success"=>"Episode Was Liked",
                "status"=>201
            ],201);
        }
        else
        {
            /** if the new reaction is not like the old one update it  */
            if( $check_reaction->like !== $request->reaction )
            {
                $check_reaction->like = $request->reaction;
                $check_reaction->save();
                return response()->json([
                    "success"=>"Action Completed",
                    "status"=>201
                ],201);;
            }

             return response()->json([
                "success"=>"Action Completed",
                "status"=>201
            ],201);;
        }


        
    }
}
