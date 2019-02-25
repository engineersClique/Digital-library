<?php

namespace App\Repositories;

use App\Models\Preference;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PreferenceRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @method Preference findWithoutFail($id, $columns = ['*'])
 * @method Preference find($id, $columns = ['*'])
 * @method Preference first($columns = ['*'])
*/
class PreferenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'key',
        'val'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Preference::class;
    }
}
