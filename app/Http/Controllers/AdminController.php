<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\Models\Event;
use App\Models\Album;
use App\Models\Press;
use App\Models\Article;
use App\Models\Information;
use App\Models\MunicipalService;
use App\Models\AttentionNeighbor;

class AdminController extends Controller
{
    public function index()
    {
    	$users = User::where('id', '<>', 1)->take(5)->get();
    	$articles = Article::take(5)->get();
    	$events = Event::take(5)->get();
    	$municipalServices = MunicipalService::take(5)->get();
    	$informations = Information::take(5)->get();
        $albums = Album::take(5)->get();
        $presses = Press::take(5)->get();
        $attentionNeighbors = AttentionNeighbor::take(5)->get();
        $videos = Video::take(5)->get();

        return view('admin.front.home', compact('users', 'articles', 'events', 'municipalServices', 'informations', 'albums', 'presses', 'attentionNeighbors', 'videos'));
    }
}
