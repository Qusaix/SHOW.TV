<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\SeriesStoreRequest;
use App\Http\Requests\Dashboard\SeriesUpdateRequest;
use App\Series;
use App\Traits\Helpers;

class SeriesController extends Controller
{
    use Helpers;

    public function index()
    {
        /** desplay all series on the dashboard */
        $series = Series::paginate(10);

        return view('dashboard.series.index',compact('series'));
    }

    public function create()
    {
        /** create page */
        return view('dashboard.series.create');
    }

    public function store( SeriesStoreRequest $request )
    {
        /** change the time fromate to save it in the database */
        $time = $request->from."-".$request->to.' @ '.$request->at;

        $new_series = new Series;
        $new_series->title = $request->title;
        $new_series->description = $request->description;
        $new_series->time = $time;

        $new_series->save();

        return redirect()->route('dashboard.series');

    }

    public function edit( $id )
    {
        /** show edit page */
        $series = Series::find( $id );

        return view('dashboard.series.edit',compact('series'));
    }

    public function update( SeriesUpdateRequest $request , $id )
    {
         /** change the time fromate to save it in the database */
        $time = $request->from."-".$request->to.' @ '.$request->at;

        $new_series = Series::find( $id );
        $new_series->title = $request->title;
        $new_series->description = $request->description;

        /** if the user chosen to update the time */
        if( $request->updateTime == "1" )
        {
            $new_series->time = $time;
        }

        $new_series->save();

        return redirect()->route('dashboard.series');
    }
}
