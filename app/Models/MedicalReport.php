<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class MedicalReport
 * @package App\Models
 * @version September 12, 2020, 6:56 am UTC
 *
 * @property string $title
 */
class MedicalReport extends Model
{

    public $table = 'medical_reports';
    



    public $fillable = [
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    
}
