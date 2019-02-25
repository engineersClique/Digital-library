<?php

namespace App\Repositories;

use App\Models\Identifier;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class IdentifierRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:30 pm UTC
 *
 * @method Identifier findWithoutFail($id, $columns = ['*'])
 * @method Identifier find($id, $columns = ['*'])
 * @method Identifier first($columns = ['*'])
*/
class IdentifierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'book',
        'type',
        'val'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Identifier::class;
    }
}
