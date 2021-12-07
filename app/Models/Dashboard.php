<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Agent
 * @package App\Models
 * @version September 12, 2020, 6:57 am UTC
 *
 * @property string $title
 */
class Dashboard extends Model
{


    public function payment_sum($month = null)
    {
        return Payment::whereMonth('date', $month)->sum('amount');
    }
    public function passport_count($month = null)
    {
        return Passport::whereMonth('issue_date', $month)->count();
    }
    public function passport_total()
    {
        return Passport::count();
    }
}
