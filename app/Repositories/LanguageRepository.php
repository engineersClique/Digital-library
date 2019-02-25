<?php

namespace App\Repositories;

use App\Models\Language;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class LanguageRepository
 * @package App\Repositories
 * @version December 6, 2018, 3:26 pm UTC
 *
 * @method Language findWithoutFail($id, $columns = ['*'])
 * @method Language find($id, $columns = ['*'])
 * @method Language first($columns = ['*'])
*/
class LanguageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'lang_code'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Language::class;
    }
}
