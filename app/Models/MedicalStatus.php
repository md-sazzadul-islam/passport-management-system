<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class MedicalStatus
 * @package App\Models
 * @version September 11, 2020, 9:20 pm UTC
 *
 * @property string $title
 */
class MedicalStatus extends Model
{

    public $table = 'medical_statuses';
    



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
