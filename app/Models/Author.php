<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Author
 * @package App\Models
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @property integer id
 * @property string name
 * @property string sort
 * @property string link
 */
class Author extends Model
{

    public $table = 'authors';

    public $timestamps = false;

    public $fillable = [
        'id',
        'name',
        'sort',
        'link'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sort' => 'string',
        'link' => 'string'
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
        return $this->belongsToMany(Book::class, 'books_authors_link', 'author', 'book');
    }
}
