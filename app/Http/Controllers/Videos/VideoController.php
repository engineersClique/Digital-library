<?php

namespace App\Http\Controllers\Videos;

use App\Http\Controllers\Controller;
use App\Models\Videos\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        \App::setLocale(\Session::get('locale', 'en'));
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::where(['level' => 1])->with('parent')->whereHas('children')->get();
        $topic = Video::where(['level' => 0])->first();
//dd($videos);
        $title = $topic->title;
        $description = $topic->description;
        $route = 'video.index';

        return view('theme::frontend.videos.index', compact('videos', 'title', 'description', 'route'));
    }

    public function show_topic($topic_id){
        $videos = Video::where(['parent_id' => $topic_id])->with(['files' => function($query){
            $query->where('preset', 'video_thumbnail');
        }])->orderBy('sort_order')->get();
        $topic = Video::find($topic_id);

        $title = $topic->title;
        $description = $topic->description;
        $route = 'video.index';

        return view('theme::frontend.videos.index', compact('videos', 'title', 'description', 'route'));
    }

    public function show_content($topic_id){
        $video = Video::where(['id' => $topic_id])->with(['files' => function($query){
            $query->whereIn('preset', ['low_res_video', 'video_thumbnail']);
        }, 'subtitles' => function($q){
            $q->where('lang_id', 'en');
        }])->first();

        return view('theme::frontend.videos.show', compact('video'));
    }
}
