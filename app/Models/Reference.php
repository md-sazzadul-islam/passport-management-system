<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Reference
 * @package App\Models
 * @version September 11, 2020, 9:11 pm UTC
 *
 * @property string $name
 * @property string $phone
 * @property string $address
 */
class Reference extends Model
{

    public $table = 'references';
    



    public $fillable = [
        'name',
        'phone',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'phone' => 'required'
    ];

    
}
