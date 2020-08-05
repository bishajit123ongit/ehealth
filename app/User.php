<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','about','mobile','qualification','type_id','requeststatus','image','address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role=='admin';
    }

    public function isDoctor(){
        return $this->role=='doctor';
    }

    public function isUser(){
        return $this->role=='user';
    }

    public function patientRequest()
    {
    	return $this->hasMany(PatientRequest::class);
    }
    public function message() 
    {
        return $this->hasMany(Message::class);
    }

    public function type()
    {
            return $this->belongsTo(Type::class);  
    }

    public function feedback()
    {
    	return $this->hasOne(Feedback::class);
    }

    public function schedule(){
        return $this->hasMany(Schedule::class);
    }

    public function booking(){
        return $this->hasOne(Booking::class);
    }

}
