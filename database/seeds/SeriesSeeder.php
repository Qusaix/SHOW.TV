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
        $series->title = "new big series";
        $series->description = 'The Bigest series ever';
        $series->time = "5:00PM";
        $series->save();
        

    }
}
