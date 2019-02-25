<?php

namespace App\Repositories;

use App\Models\File;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class DataRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @method File findWithoutFail($id, $columns = ['*'])
 * @method File find($id, $columns = ['*'])
 * @method File first($columns = ['*'])
*/
class FileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'book',
        'format',
        'uncompressed_size',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return File::class;
    }
}
