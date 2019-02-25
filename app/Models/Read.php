<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    protected $table = 'book_read_link';

    public $timestamps = false;

    public $fillable = [
        'id',
        'book_id',
        'user_id',
        'is_read'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book');
    }
}
