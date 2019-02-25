<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ConversionOption
 * @package App\Models
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @property integer id
 * @property string format
 * @property integer book
 * @property string data
 */
class ConversionOption extends Model
{

    public $table = 'conversion_options';
    
    const CREATED_AT = 'timestamp';
    const UPDATED_AT = 'last_modified';



    public $fillable = [
        'id',
        'format',
        'book',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'format' => 'string',
        'book' => 'integer',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
