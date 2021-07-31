<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class setting
 * @package App\Models
 * @version September 11, 2020, 5:16 pm UTC
 *
 * @property string $app_name
 * @property string $app_title
 * @property string $address
 * @property string $phone
 * @property string $app_email
 * @property string $app_logo
 */
class Setting extends Model
{

    public $table = 'settings';
    



    public $fillable = [
        'app_name',
        'app_title',
        'address',
        'phone',
        'app_email',
        'app_logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'app_name' => 'string',
        'app_title' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'app_email' => 'string',
        'app_logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'app_name' => 'required',
        'app_title' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'app_email' => 'required|email'
    ];

    
}
