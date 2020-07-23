<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patientRequest extends Model
{
    protected $fillable = [
        'disease', 'user_id', 'symtomps','age','status',
    ];
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctorRequest()
    {
    	return $this->hasMany(DoctorsRequest::class);
    }
}
