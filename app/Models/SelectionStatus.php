<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class SelectionStatus
 * @package App\Models
 * @version September 11, 2020, 9:07 pm UTC
 *
 * @property string $title
 */
class SelectionStatus extends Model
{

    public $table = 'selection_statuses';
    



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
