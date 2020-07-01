<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }
}
