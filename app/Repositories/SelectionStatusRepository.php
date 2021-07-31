<?php

namespace App\Repositories;

use App\Models\SelectionStatus;
use App\Repositories\BaseRepository;

/**
 * Class SelectionStatusRepository
 * @package App\Repositories
 * @version September 11, 2020, 9:07 pm UTC
*/

class SelectionStatusRepository extends BaseRepository
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
        return SelectionStatus::class;
    }
}
