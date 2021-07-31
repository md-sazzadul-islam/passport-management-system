<?php

namespace App\Repositories;

use App\Models\Reference;
use App\Repositories\BaseRepository;

/**
 * Class ReferenceRepository
 * @package App\Repositories
 * @version September 11, 2020, 9:11 pm UTC
*/

class ReferenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'phone',
        'address'
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
        return Reference::class;
    }
}
