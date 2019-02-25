<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Feed
 * @package App\Models
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @property integer id
 * @property string title
 * @property string script
 */
class Feed extends Model
{

    public $table = 'feeds';
    
    const CREATED_AT = 'timestamp';
    const UPDATED_AT = 'last_modified';



    public $fillable = [
        'id',
        'title',
        'script'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'script' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
