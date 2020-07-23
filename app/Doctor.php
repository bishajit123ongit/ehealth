<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable
{
    use Notifiable;

        protected $guard = 'doctor';

        protected $fillable = [
            'name', 'email', 'password','mobile','qualification','type_id',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function type()
        {
            return $this->belongsTo(Type::class);
        }
}
