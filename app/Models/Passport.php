<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Passport
 * @package App\Models
 * @version September 12, 2020, 6:49 am UTC
 *
 * @property string $passport_holder
 * @property string $holder_father_name
 * @property string $passport_no
 * @property integer $position
 * @property string $issue_date
 * @property string $expiry_date
 * @property string $date_of_birth
 * @property string $mobile_no
 * @property integer $selection_status
 * @property string $medical_issue_date
 * @property integer $medical_status
 * @property integer $medical_report
 * @property integer $reference
 * @property string $company_name
 * @property integer $agent
 * @property string $remarks
 */
class Passport extends Model
{

    public $table = 'passports';
    



    public $fillable = [
        'passport_holder',
        'holder_father_name',
        'passport_no',
        'position',
        'issue_date',
        'expiry_date',
        'date_of_birth',
        'mobile_no',
        'selection_status',
        'medical_issue_date',
        'medical_status',
        'medical_report',
        'reference',
        'company_name',
        'agent',
        'remarks'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'passport_holder' => 'string',
        'holder_father_name' => 'string',
        'passport_no' => 'string',
        'position' => 'integer',
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'date_of_birth' => 'date',
        'mobile_no' => 'string',
        'selection_status' => 'integer',
        'medical_issue_date' => 'date',
        'medical_status' => 'integer',
        'medical_report' => 'integer',
        'reference' => 'integer',
        'company_name' => 'string',
        'agent' => 'integer',
        'remarks' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'passport_holder' => 'required|max:100',
        'holder_father_name' => 'required|max:100',
        'passport_no' => 'required|min:6|max:100',
        'mobile_no' => 'required'
    ];

    public function medicalReportjoin()
    {
        return $this->belongsTo(MedicalReport::class, 'medical_report');
    }
    public function medicalStatusjoin()
    {
        return $this->belongsTo(MedicalStatus::class, 'medical_status');
    }
    public function referencejoin()
    {
        return $this->belongsTo(Reference::class, 'reference');
    }
    public function agentjoin()
    {
        return $this->belongsTo(Agent::class, 'agent');
    }
    public function selectionStatusjoin()
    {
        return $this->belongsTo(SelectionStatus::class, 'selection_status');
    }
    public function positionjoin()
    {
        return $this->belongsTo(Position::class, 'position');
    }

    
}
