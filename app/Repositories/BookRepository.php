<?php

namespace App\Repositories;

use App\Models\Book;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BookRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @method Book findWithoutFail($id, $columns = ['*'])
 * @method Book find($id, $columns = ['*'])
 * @method Book first($columns = ['*'])
*/
class BookRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Book::class;
    }
}
