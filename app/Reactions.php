<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reactions extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
}
