<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Myconte
 * @package App\Models
 * @version September 13, 2020, 4:56 am UTC
 *
 * @property string $test
 */
class Myconte extends Model
{

    public $table = 'mycontes';
    



    public $fillable = [
        'test'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'test' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
