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
        $ep->title = 'The Show Episode 1 - Go Home'; 
        $ep->description = 'awosme new episode';
        $ep->duration = "25:00";
        $ep->time = "5:00PM";
        $ep->thumbnail = 'https://pbs.twimg.com/media/EVE67cnXgAAZBvI.jpg';
        $ep->video = "link";
        $ep->series()->associate($series);
        $ep->save();


        $ep2 = new Episode;
        $ep2->title = 'The Show Episode 2 - Go Home';
        $ep2->description = 'awosme new episode';
        $ep2->duration = "25:00";
        $ep2->time = "5:00PM";
        $ep2->thumbnail = 'https://img.roya.tv/imageserv/Size400Q70/images/programs/802/ppJLCdJ5Xz0GSB3IOWlYlXKQNxkVmIxmnqtEsPZZ.jpeg';
        $ep2->video = "link";
        $ep2->series()->associate($series);
        $ep2->save();


        $ep3 = new Episode;
        $ep3->title = 'The Show Episode 3 - Go Home';
        $ep3->description = 'awosme new episode';
        $ep3->duration = "25:00";
        $ep3->time = "5:00PM";
        $ep3->thumbnail = 'https://img.roya.tv/imageserv/Size1920Q70//programs/stream/promos_thumbnails/zDKJHCgsRrQw3vqPISdEbgAaz6OsdGu46cRqUJgz.jpeg';
        $ep3->video = "link";
        $ep3->series()->associate($series);
        $ep3->save();


        $ep4 = new Episode;
        $ep4->title = 'The Show Episode 4 - Go Home';
        $ep4->description = 'awosme new episode';
        $ep4->duration = "25:00";
        $ep4->time = "5:00PM";
        $ep4->thumbnail = 'https://i.ytimg.com/vi/cN9mR7gzCfI/maxresdefault.jpg';
        $ep4->video = "link";
        $ep4->series()->associate($series);
        $ep4->save();
       








    }
}
