<?php

use Illuminate\Database\Seeder;
use App\Series;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $series = new Series;
        $series->title = "Legion";
        $series->description = 'David Haller is a troubled young man who was diagnosed with schizophrenia as a child. Shuffled from one psychiatric institution to the next';
        $series->time = "5:00PM";
        $series->save();

        $series = new Series;
        $series->title = "Vikings";
        $series->description = 'Ragnar Lothbrok, a legendary Norse hero, is a mere farmer who rises up to become a fearless warrior and commander of the Viking tribes with the support of his equally ferocious family.';
        $series->time = "6:00PM";
        $series->save();


        $series = new Series;
        $series->title = "Black Mirror";
        $series->description = 'The Bigest series ever';
        $series->time = "7:00PM";
        $series->save();


        $series = new Series;
        $series->title = "Brooklyn Nine-Nine";
        $series->description = 'Ray Holt, an eccentric commanding officer, and his diverse and quirky team of odd detectives solve crimes in Brooklyn, New York City.';
        $series->time = "8:00PM";
        $series->save();


        $series = new Series;
        $series->title = "Silicon Valley";
        $series->description = 'Richard, a programmer, creates an app called the Pied Piper and tries to get investors for it. Meanwhile, five other programmers struggle to make their mark in Silicon Valley.';
        $series->time = "9:00PM";
        $series->save();


        $series = new Series;
        $series->title = "Friends";
        $series->description = 'The Bigest series ever';
        $series->time = "10:00PM";
        $series->save();
        

    }
}
