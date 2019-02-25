<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Identifier
 * @package App\Models
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @property integer id
 * @property integer book
 * @property string type
 * @property string val
 */
class Identifier extends Model
{

    public $table = 'identifiers';

    public $timestamps = false;

    public $fillable = [
        'id',
        'book',
        'type',
        'val'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book' => 'integer',
        'type' => 'string',
        'val' => 'string'
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
