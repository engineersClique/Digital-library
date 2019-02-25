<?php

namespace App\Models;
use App\Models\Book;
use Eloquent as Model;

/**
 * Class Rating
 * @package App\Models
 * @version December 6, 2018, 3:25 pm UTC
 *
 * @property integer id
 * @property integer rating
 */
class Rating extends Model
{

    public $table = 'ratings';

    public $timestamps = false;

    public $fillable = [
        'id',
        'rating'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rating' => 'integer'
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
        return $this->belongsToMany(Book::class, 'books_ratings_link', 'rating', 'book');
    }
}
