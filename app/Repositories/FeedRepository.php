<?php

namespace App\Repositories;

use App\Models\Feed;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FeedRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @method Feed findWithoutFail($id, $columns = ['*'])
 * @method Feed find($id, $columns = ['*'])
 * @method Feed first($columns = ['*'])
*/
class FeedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'title',
        'script'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Feed::class;
    }
}
