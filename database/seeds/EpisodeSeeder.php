<?php

use Illuminate\Database\Seeder;
use App\Episode;
use App\Series;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = Series::find(1);
        
        $ep = new Episode;
        $ep->title = 'new ep';
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'image';
        $ep->video = "link";
        $ep->series()->associate($series);
        $ep->save();
       








    }
}
