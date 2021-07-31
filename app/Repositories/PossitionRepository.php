<?php

namespace App\Repositories;

use App\Models\Possition;
use App\Repositories\BaseRepository;

/**
 * Class PossitionRepository
 * @package App\Repositories
 * @version September 11, 2020, 9:06 pm UTC
*/

class PossitionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Possition::class;
    }
}
