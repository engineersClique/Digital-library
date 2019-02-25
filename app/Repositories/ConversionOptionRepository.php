<?php

namespace App\Repositories;

use App\Models\ConversionOption;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ConversionOptionRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:33 pm UTC
 *
 * @method ConversionOption findWithoutFail($id, $columns = ['*'])
 * @method ConversionOption find($id, $columns = ['*'])
 * @method ConversionOption first($columns = ['*'])
*/
class ConversionOptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'format',
        'book',
        'file'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ConversionOption::class;
    }
}
