<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Comment
 * @package App\Models
 * @version December 8, 2018, 12:41 pm UTC
 *
 * @property integer id
 * @property integer book
 * @property string text
 */
class Comment extends Model
{

    public $table = 'comments';
    
    public $timestamps = false;

    public $fillable = [
        'id',
        'book',
        'text'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book' => 'integer',
        'text' => 'string'
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
