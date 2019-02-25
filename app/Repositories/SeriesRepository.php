<?php

namespace App\Repositories;

use App\Models\Series;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SeriesRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:25 pm UTC
 *
 * @method Series findWithoutFail($id, $columns = ['*'])
 * @method Series find($id, $columns = ['*'])
 * @method Series first($columns = ['*'])
*/
class SeriesRepository extends BaseRepository
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
        return Series::class;
    }
}
