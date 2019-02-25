<?php

namespace App\Models\Videos;

//use App\Models\Videos\ContentFile;
use App\Models\Videos\ContentFile;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'content_contentnode';
    public $incrementing = false;

    public function children()
    {
        return $this->hasMany(Video::class, 'id', 'parent_id')->where('lang_id', 'en');
    }

    public function parent()
    {
        return $this->belongsTo(Video::class, 'parent_id', 'id')->where('lang_id', 'en');
    }

    public function files()
    {
        return $this->hasMany(ContentFile::class, 'contentnode_id');
    }

    public function subtitles()
    {
        return $this->hasMany(ContentFile::class, 'contentnode_id')->where('preset', 'video_subtitle');
    }
}
