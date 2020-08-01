<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'day', 'date','start_time', 'end_time','doctor_id','status',
    ];

    public function Booking(){
        return $this->hasOne(Booking::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
