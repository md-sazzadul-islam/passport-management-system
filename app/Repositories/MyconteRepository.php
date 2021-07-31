<?php

namespace App\Repositories;

use App\Models\Myconte;
use App\Repositories\BaseRepository;

/**
 * Class MyconteRepository
 * @package App\Repositories
 * @version September 13, 2020, 4:56 am UTC
*/

class MyconteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'test'
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
        return Myconte::class;
    }
}
