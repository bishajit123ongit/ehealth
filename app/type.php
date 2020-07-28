<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $fillable = [
        'name', 
    ];

    public function doctor()
    {
    	return $this->hasMany(Doctor::class);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }
}
