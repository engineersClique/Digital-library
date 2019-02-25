<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Book
 * @package App\Models
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @property integer id
 * @property string title
 * @property string sort
 * @property string pubdate
 * @property decimal series_index
 * @property string author_sort
 * @property string isbn
 * @property string lccn
 * @property string path
 * @property integer flags
 * @property string uuid
 * @property string has_cover
 */
class Book extends Model
{

    public $table = 'books';
    
    const CREATED_AT = 'timestamp';
    const UPDATED_AT = 'last_modified';

    protected $dateFormat = 'Y-m-d H:i:s.uP';

    public $fillable = [
        'id',
        'title',
        'sort',
        'pubdate',
        'series_index',
        'author_sort',
        'isbn',
        'lccn',
        'path',
        'flags',
        'uuid',
        'has_cover'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'sort' => 'string',
        'pubdate' => 'string',
        'author_sort' => 'string',
        'isbn' => 'string',
        'lccn' => 'string',
        'path' => 'string',
        'flags' => 'integer',
        'uuid' => 'string',
        'has_cover' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'books_authors_link', 'book', 'author');
    }
    public function languages()
    {
        return $this->belongsToMany(Language::class, 'books_languages_link', 'book', 'lang_code');
    }
    public function publishers()
    {
        return $this->belongsToMany(Publisher::class, 'books_publishers_link', 'book', 'publisher');
    }
    public function ratings()
    {
        return $this->belongsToMany(Rating::class, 'books_ratings_link', 'book', 'rating');
    }
    public function series()
    {
        return $this->belongsToMany(Series::class, 'books_series_link', 'book', 'series');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'books_tags_link', 'book', 'tag');
    }
    public function files()
    {
        return $this->hasMany(File::class, 'book');
    }
    public function comment()
    {
        return $this->hasOne(Comment::class, 'book');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'book_id');
    }

    public function reads()
    {
        return $this->hasMany(Read::class, 'book_id');
    }

    public static function getColumns($bookId = null)
    {
        $query = Column::pluck('id')->map(function (int $id) use ($bookId) {
            return 'SELECT'
                .' book, datatype, label, value '
                .' FROM custom_column_'.$id
                .' LEFT JOIN custom_columns ON custom_columns.id='.$id
                .($bookId ? ' WHERE book IN ('.implode(',', (array)$bookId).')' : '');
        })->implode(' UNION ');
        $result = app('db')
            ->connection(app('db')
                ->getDefaultConnection())
            ->select($query);
        $result = collect($result)
            ->groupBy('book')
            ->map(function ($item) {
                return $item->mapWithKeys(function ($item) {
                    return [
                        $item->label => static::castCustomColumnValue($item),
                    ];
                });
            })
            ->toArray();
        return $result;
    }
    protected static function castCustomColumnValue($row)
    {
        $value = $row->value;
        switch ($row->datatype) {
            case 'int':
                $value = (int)$value;
                break;
            case 'bool':
                $value = (bool)$value;
                break;
            case 'composite':
                $value = json_decode($value);
                break;
        }
        return $value;
    }
}
