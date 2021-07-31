<?php

namespace App\Repositories;

use App\Models\MedicalReport;
use App\Repositories\BaseRepository;

/**
 * Class MedicalReportRepository
 * @package App\Repositories
 * @version September 12, 2020, 6:56 am UTC
*/

class MedicalReportRepository extends BaseRepository
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
        return MedicalReport::class;
    }
}
