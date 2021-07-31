<?php

namespace App\Repositories;

use App\Models\Payment;
use App\Repositories\BaseRepository;
use DB;
/**
 * Class PaymentRepository
 * @package App\Repositories
 * @version September 18, 2020, 8:07 pm UTC
*/

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'amount',
        'passport',
        'date',
        'note'
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
        return Payment::class;
    }

    public function report($perPage, $search = [], $join = null, $columns = ['*'])
    {
        $query = $this->allQuery();
        $query->select(DB::Raw('passport,sum(amount) as total_amount'));
        if (count($search)) {
            foreach ($search as $key => $value) {
                if (in_array($key, $this->getFieldsSearchable())) {
                    $query->where($key,'like', '%'.$value.'%');
                }
            }
        }
        $query->groupby('passport');
        if (!is_null($join)) {
            if (count($join)) {
                foreach ($join as $key => $value) {
                    $query->with($value);
                }
            }
        }

        return $query->paginate($perPage, $columns);
    }
}
