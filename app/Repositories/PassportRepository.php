<?php

namespace App\Repositories;

use App\Models\Passport;
use App\Repositories\BaseRepository;

/**
 * Class PassportRepository
 * @package App\Repositories
 * @version September 12, 2020, 6:49 am UTC
 */

class PassportRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'passport_holder',
        'holder_father_name',
        'passport_no',
        // 'position',
        'issue_date',
        'expiry_date',
        'date_of_birth',
        'mobile_no',
        // 'selection_status',
        'medical_issue_date',
        // 'medical_status',
        // 'medical_report',
        // 'reference',
        'company_name',
        // 'agent',
        'remarks'
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
    public function getFieldsSearchableStr()
    {

        foreach ($this->fieldSearchable as $key => $value) {
            $all_Searchable[$value] = ucwords(str_replace('_', ' ', $value));
        }
        return $all_Searchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Passport::class;
    }
}
