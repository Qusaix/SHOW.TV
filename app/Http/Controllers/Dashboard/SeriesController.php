<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\SeriesStoreRequest;
use App\Series;
use App\Traits\Helpers;

class SeriesController extends Controller
{
    use Helpers;

    public function index()
    {
        $series = Series::get();

        return view('dashboard.series.index',compact('series'));
    }

    public function create()
    {
        return view('dashboard.series.create');
    }

    public function store( SeriesStoreRequest $request )
    {
        $time = $request->from."-".$request->to.' @ '.$request->at;

        $new_series = new Series;
        $new_series->title = $request->title;
        $new_series->description = $request->description;
        $new_series->time = $time;

        $new_series->save();

        return redirect()->route('dashboard.series');

    }
}
