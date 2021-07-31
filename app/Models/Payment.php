<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Payment
 * @package App\Models
 * @version September 18, 2020, 8:07 pm UTC
 *
 * @property number $amount
 * @property integer $passport
 * @property string $note
 */
class Payment extends Model
{

    public $table = 'payments';
    



    public $fillable = [
        'amount',
        'passport',
        'date',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'amount' => 'double',
        'date' => 'date_format:d/m/yyyy',
        'passport' => 'integer',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'amount' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'passport' => 'required',
        'date' => 'required'
    ];
    public function passportjoin()
    {
        return $this->belongsTo(Passport::class, 'passport');
    }

    
}
