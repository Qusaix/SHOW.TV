<?php

namespace App\Traits;
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
}