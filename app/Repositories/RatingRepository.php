<?php

namespace App\Repositories;

use App\Models\Rating;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RatingRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:25 pm UTC
 *
 * @method Rating findWithoutFail($id, $columns = ['*'])
 * @method Rating find($id, $columns = ['*'])
 * @method Rating first($columns = ['*'])
*/
class RatingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'rating'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Rating::class;
    }
}
