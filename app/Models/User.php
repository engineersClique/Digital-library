<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class User
 * @package App\Models
 * @version December 6, 2018, 3:29 pm UTC
 *
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property string|\Carbon\Carbon created_at
 * @property string|\Carbon\Carbon updated_at
 */
class User extends Model
{

    public $table = 'users';
    
    const CREATED_AT = 'timestamp';
    const UPDATED_AT = 'last_modified';



    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
