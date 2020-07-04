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
    /** This heleper where i put the upload file function with create time fromate*/
    use Helpers;

    public function index()
    {
        /** get all the episodes to show it in the dashboard*/
        $episodes = Episode::paginate(10);

        return view('dashboard.episode.index',compact('episodes'));
    }

    public function create()
    {
        /** get the series to show it in the create series page */
        $series = Series::get();

        return view('dashboard.episode.create',compact('series'));
    }


    public function store( EpisodeStoreRequest $request )
    {
        /** find the series the user have chosen  */
        $chosen_series = Series::find( $request->series );

        /** Createing new Episode */
        $new_episode = new Episode;
        $new_episode->title = $request->title;
        $new_episode->description = $request->description;
        $new_episode->duration = $request->duration;
        $new_episode->time = $this->createTimeFormat( $request->time );
        $new_episode->thumbnail = $this->uploadfiles("episode_thumbnail",$request->thumbnail);
        $new_episode->video = $this->uploadfiles("episode_video",$request->video);

        /** Make the relation between the episode and the series the user chosen */
        $new_episode->series()->associate( $chosen_series );
        $new_episode->save();

        

        
        
        return redirect()->route('dashboard.episodes');
    }


    public function edit ( $id )
    {
         /** get the series to show it in the create series page */
        $series = Series::get();

        /** get the episode so i can display it's information */
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

        /** if the user did't chose any new thumbnail or time or video or duration it will not update these sections*/
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
