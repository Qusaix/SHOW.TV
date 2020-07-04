<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'time',
    ];
    
    public function episode()
    {
        return $this->hasMany(Episode::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
