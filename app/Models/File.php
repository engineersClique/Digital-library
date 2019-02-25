<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class File
 * @package App\Models
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @property integer id
 * @property integer book
 * @property string format
 * @property integer uncompressed_size
 * @property string name
 */
class File extends Model
{

    public $table = 'data';
    
    const CREATED_AT = 'timestamp';
    const UPDATED_AT = 'last_modified';



    public $fillable = [
        'id',
        'book',
        'format',
        'uncompressed_size',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'book' => 'integer',
        'format' => 'string',
        'uncompressed_size' => 'integer',
        'name' => 'string'
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
    /**
     * @return string
     */
    public function getPath(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            $this->book->path,
            $this->name.'.'.strtolower($this->format),
        ]);
    }
}
