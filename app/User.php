<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function episode()
    {
        return $this->hasMany(Reactions::class);
    }

    public function series()
    {
        return $this->belongsToMany(Series::class);
    }

    /** METHODS */

    public function check_if_following( $user_series , $chosen_series_id)
    {
        foreach($user_series as $series)
        {
            if($series->id === $chosen_series_id)
            {
               
                return "1";
            }
        }
        return "0";
    }
}
