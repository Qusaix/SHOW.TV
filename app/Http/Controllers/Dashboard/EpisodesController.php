<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;
use App\Series;
use App\Http\Requests\Dashboard\EpisodeStoreRequest;
use App\Http\Requests\Dashboard\EpisodeUpdateRequest;

use App\Traits\Helpers;

class EpisodesController extends Controller
{
    use Helpers;

    public function index()
    {
        $episodes = Episode::get();

        return view('dashboard.episode.index',compact('episodes'));
    }

    public function create()
    {
        $series = Series::get();
        return view('dashboard.episode.create',compact('series'));
    }


    public function store( EpisodeStoreRequest $request )
    {
        $chosen_series = Series::find( $request->series );

        $new_episode = new Episode;
        $new_episode->title = $request->title;
        $new_episode->description = $request->description;
        $new_episode->duration = $request->duration;
        $new_episode->time = $this->createTimeFormat( $request->time );
        $new_episode->thumbnail = $this->uploadfiles("episode_thumbnail",$request->thumbnail);
        $new_episode->video = $this->uploadfiles("episode_video",$request->video);
        $new_episode->series()->associate( $chosen_series );
        $new_episode->save();

        

        
        
        return redirect()->route('dashboard.episodes');
    }


    public function edit ( $id )
    {
        $series = Series::get();
        $episode = Episode::find( $id );

        return view('dashboard.episode.edit',compact('series','episode'));
    }

    public function update( EpisodeUpdateRequest $request , $id )
    {

        $chosen_series = Series::find( $request->series );

        $new_episode = Episode::find($id);
        $new_episode->title = $request->title;
        $new_episode->description = $request->description;
        $new_episode->series()->associate( $chosen_series );

        if( $request->thumbnail !== null )
        {
            $new_episode->thumbnail = $this->uploadfiles("episode_thumbnail",$request->thumbnail);

    
        }
        if( $request->time !== null )
        {
            $new_episode->time = $this->createTimeFormat( $request->time );

        }
        if( $request->video !== null )
        {
            $new_episode->video = $this->uploadfiles("episode_video",$request->video);

        }
        if( $request->duration !== null )
        {
            $new_episode->duration = $request->duration;
        }

        $new_episode->save();

        return redirect()->route('dashboard.episodes');
    }

}
