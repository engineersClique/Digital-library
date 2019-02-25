<?php

function get_cover($path){
    return asset('storage/books/' . $path . '/cover.jpg');
}

function get_storage_url($video_files){
    $video_files = $video_files->groupBy('preset');
    $files['low_res_video'] = '';
    $files['video_thumbnail'] = '';
    $files['video_subtitle'] = '';

    foreach($video_files as $key => $file){
        $file = $file->first();
        $files[$key] = url('storage/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] . '.' . $file['extension']);
    }

    return $files;
}

function generate_subtitle_url($file){
    $path = url('storage/videos/'.$file['checksum'][0] . '/' . $file['checksum'][1] . '/' . $file['checksum'] . '.' . $file['extension']);

    return $path;
}

function get_language($lang_id){
    switch ($lang_id) {
        case 'en':
            return 'English';
            break;
        default:
            return 'English';
            break;
    }


}