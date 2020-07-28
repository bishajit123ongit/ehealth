<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{

    protected $fillable = [
        'user_id','comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
