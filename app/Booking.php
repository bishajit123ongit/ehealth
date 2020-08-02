<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 'schedule_id ', 'status','confirm','doctor_id',
    ];

    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }

    public function user()
    {
            return $this->belongsTo(User::class);  
    }
}
