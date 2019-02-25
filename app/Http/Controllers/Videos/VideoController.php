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

        $title = $topic->title;
        $description = $topic->description;
        $route = 'video.index';

        return view('theme::frontend.videos.index', compact('videos', 'title', 'description', 'route'));
    }

    public function show_topic($topic_id){
        $videos = Video::where(['parent_id' => $topic_id])->with('files')->orderBy('sort_order')->get();
        $topic = Video::find($topic_id);

        if(!$videos || !$topic) \App::abort(404);

        $title = $topic->title;
        $description = $topic->description;
        $route = 'video.index';

        return view('theme::frontend.videos.index', compact('videos', 'title', 'description', 'route'));
    }

    public function show_content($topic_id){
        $video =  Video::where(['id' => $topic_id])->with('files')->first();

        switch($video->kind){
            case 'video':
                $video = Video::where(['id' => $topic_id])->with(['files' => function($query){
                    $query->whereIn('preset', ['low_res_video', 'video_thumbnail']);
                }, 'subtitles' => function($q){
                    $q->where('lang_id', 'en');
                }])->first();

                return view('theme::frontend.videos.show', compact('video'));
                break;
            case 'App':
                Video::where(['id' => $topic_id])->with(['files' => function($query){
                    $query->whereIn('preset', ['low_res_video', 'video_thumbnail']);
                }, 'subtitles' => function($q){
                    $q->where('lang_id', 'en');
                }])->first();

                break;
            case 'document':
                $extensions = $video->files->pluck('extension')->toArray();
                if(in_array('epub', $extensions))
                {
                    return view('theme::frontend.videos.show_document', compact('video'));
                }
                else if(in_array('pdf', $extensions))
                {
                    return view('theme::frontend.videos.show_pdf', compact('video'));
                }

                break;
            case 'html5': // files => extensions: zip and png
                $video_files = $video->files->groupBy('preset');
                $files['document'] = '';
                $files['document_thumbnail'] = '';
                $file_url = '';
                foreach($video_files as $key => $file){
                    $file = $file->first();

                    $file_path = 'storage/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] . '.' . $file['extension'];
                    $files[$key] = url($file_path);

                    if($key == 'html5_zip')
                    {
                        $zipper = new \Chumper\Zipper\Zipper;
                        $html_file = $zipper->make($file_path)->listFiles();
                        $file_url = url('storage/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] . '/' . $html_file[0]);

                        $zipper->make($file_path)->extractTo('storage/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] );
                    }

                }

                return view('theme::frontend.videos.show_html5', compact('video', 'files', 'file_url'));
                break;
            default:
                Video::where(['id' => $topic_id])->with(['files' => function($query){
                    $query->whereIn('preset', ['low_res_video', 'video_thumbnail']);
                }, 'subtitles' => function($q){
                    $q->where('lang_id', 'en');
                }])->first();

                return view('theme::frontend.videos.show', compact('video'));
                break;
        }
    }

    /**
     * Stream pdf for pdf reader
     * @param Book $book
     * @return mixed
     */
    public function serve_pdf($document)
    {
        $video = Video::where(['id' => $document])->with(['files', 'subtitles' => function($q){
            $q->where('lang_id', 'en');
        }])->first();

        $video_files = $video->files->groupBy('preset');
        $files['document'] = '';
        $files['document_thumbnail'] = '';

        foreach($video_files as $key => $file){
            $file = $file->first();
            $files[$key] = storage_path('app/public/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] . '.' . $file['extension']);
        }

        header('Content-Type: application/pdf');
        return response()->file($files['document']);
    }

    /**
     * Stream html5 reader
     * @param Book $book
     * @return mixed
     */
    public function serve_html5($document)
    {
        $video = Video::where(['id' => $document])->with(['files' => function($query){
            $query->whereIn('preset', ['epub', 'document_thumbnail']);
        }, 'subtitles' => function($q){
            $q->whereIn('lang_id', ['en', null]);
        }])->first();

        header('Content-Type: application/epub');
        $files = get_storage_url($video->files);
        print_r($files);
        echo public_path('storage/videos/'.$video->path.'/' . $video->files->first()->name . '.' . strtolower($video->files()->first()->format));
        return response()->file(
            public_path('storage/videos/'.$video->path.'/' . $video->files->first()->name . '.' . strtolower($video->files()->first()->format))
        );
    }
}
