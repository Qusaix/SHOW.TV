<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Episode extends Model
{
    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reactions::class);
    }


    /** METHODS */

    public function check_reactions ( $user_id , $episode_id )
    {
        $check_reaction = Reactions::where('user_id',$user_id)
        ->where('episode_id',$episode_id)
        ->first();

        

        if( $check_reaction == null )
        {
            $check_reaction = ( object ) array(
                "like"=> 4
            );
        }

        return $check_reaction;
    }


}
