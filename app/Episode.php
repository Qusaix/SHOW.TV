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


}
