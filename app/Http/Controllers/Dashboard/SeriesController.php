<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Series;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Series::get();

        return view('dashboard.series.index',compact('series'));
    }
}
