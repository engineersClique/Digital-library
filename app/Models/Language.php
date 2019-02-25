<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Language
 * @package App\Models
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @property integer id
 * @property string lang_code
 */
class Language extends Model
{

    public $table = 'languages';

    public $timestamps = false;

    public $fillable = [
        'id',
        'lang_code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'lang_code' => 'string'
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
        return $this->belongsToMany(Book::class, 'books_languages_link', 'lang_code', 'book');
    }
}
