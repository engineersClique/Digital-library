<?php

namespace App\Repositories;

use App\Models\Author;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AuthorRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @method Author findWithoutFail($id, $columns = ['*'])
 * @method Author find($id, $columns = ['*'])
 * @method Author first($columns = ['*'])
*/
class AuthorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'sort',
        'link'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Author::class;
    }
}
