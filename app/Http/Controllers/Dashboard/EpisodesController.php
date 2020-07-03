<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Episode;
class EpisodesController extends Controller
{
    public function index()
    {
        $episodes = Episode::get();

        return view('dashboard.episode.index',compact('episodes'));
    }

}
