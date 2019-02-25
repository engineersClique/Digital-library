<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tag
 * @package App\Models
 * @version December 6, 2018, 3:24 pm UTC
 *
 * @property integer id
 * @property string name
 */
class Tag extends Model
{

    public $table = 'tags';
    
    public $timestamps = false;

    public $fillable = [
        'id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'books_tags_link', 'tag', 'book');
    }
}
