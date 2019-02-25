<?php

namespace App\Models\Videos;

use Illuminate\Database\Eloquent\Model;

class LocalFile extends Model
{
    public $incrementing = false;

    protected $table = 'content_localfile';
}
