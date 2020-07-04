<?php

namespace App\Traits;
use Carbon\Carbon;
use URL;

trait Helpers
{
    public function uploadfiles($file , $chosenfile)
    {
        $chosenfile = $chosenfile;
        $name = rand().'.'. $chosenfile->getClientOriginalExtension();
        $chosenfile->move(public_path($file),$name);
        
        return URL::to($file.'/'.$name);
    }

    public function createTimeFormat($attr) {        
        return Carbon::parse($attr)->format('l - h:ia');
    }

}