<?php

namespace App\Repositories;

use App\Models\MedicalStatus;
use App\Repositories\BaseRepository;

/**
 * Class MedicalStatusRepository
 * @package App\Repositories
 * @version September 11, 2020, 9:20 pm UTC
*/

class MedicalStatusRepository extends BaseRepository
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
        return MedicalStatus::class;
    }
}
