<?php

namespace App\Repositories;

use App\Models\Publisher;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PublisherRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @method Publisher findWithoutFail($id, $columns = ['*'])
 * @method Publisher find($id, $columns = ['*'])
 * @method Publisher first($columns = ['*'])
*/
class PublisherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name',
        'sort'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Publisher::class;
    }
}
