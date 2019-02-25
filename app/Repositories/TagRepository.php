<?php

namespace App\Repositories;

use App\Models\Tag;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TagRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:24 pm UTC
 *
 * @method Tag findWithoutFail($id, $columns = ['*'])
 * @method Tag find($id, $columns = ['*'])
 * @method Tag first($columns = ['*'])
*/
class TagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tag::class;
    }
}
