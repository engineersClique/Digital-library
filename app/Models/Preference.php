<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Preference
 * @package App\Models
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @property integer id
 * @property string key
 * @property string val
 */
class Preference extends Model
{

    public $table = 'preferences';

    public $timestamps = false;

    public $fillable = [
        'id',
        'key',
        'val'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'key' => 'string',
        'val' => 'array'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @param string $name
     * @return mixed
     */
    public static function getValue(string $name)
    {
        return static::where('key', $name)->value('val');
    }
    /**
     * @param string $name
     * @param $value
     */
    public static function setValue(string $name, $value)
    {
        static::where('key', $name)->update([
            'val' => $value,
        ]);
    }
}
