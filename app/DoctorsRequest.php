<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorsRequest extends Model
{
    protected $fillable = [
        'doctor_id', 'patientrequest_id', 'status',
    ];

    public function patientRequest()
    {
        return $this->belongsTo(PatientRequest::class,'patientrequest_id');
    }
}
