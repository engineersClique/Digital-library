<?php

namespace App\Models\Videos;

use Illuminate\Database\Eloquent\Model;

class ContentFile extends Model
{
    public $incrementing = false;

    protected $table = 'content_file';

    public function extension()
    {
        return $this->belongsTo(LocalFile::class, 'local_file_id');
    }
}
