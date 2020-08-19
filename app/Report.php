<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'image', 'user_id','doctor_id',
    ];

    public function user()
    {
            return $this->belongsTo(User::class);  
    }
}
