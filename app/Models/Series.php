<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Series
 * @package App\Models
 * @version December 6, 2018, 3:25 pm UTC
 *
 * @property integer id
 * @property string name
 * @property string sort
 */
class Series extends Model
{

    public $table = 'series';
    
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
        return $this->belongsToMany(Book::class, 'books_series_link', 'series', 'book');
    }
    
}
