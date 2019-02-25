<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Publisher
 * @package App\Models
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @property integer id
 * @property string name
 * @property string sort
 */
class Publisher extends Model
{

    public $table = 'publishers';

    public $timestamps = false;

    public $fillable = [
        'id',
        'name',
        'sort'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'sort' => 'string'
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
        return $this->belongsToMany(Book::class, 'books_publishers_link', 'publisher', 'book');
    }
}
