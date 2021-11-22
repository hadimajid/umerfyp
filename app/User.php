<?php

namespace App;

use Iamjaime\Credits\Traits\UsesCredits;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable,UsesCredits;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username','number'
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

    public function sets(){
        return $this->belongsToMany(Set::class)->withPivot(['todaypayment','security','yesterdaypayment','twodaybeforepayment','amountdeposited'])->withTimestamps();
    }

    public function hopees(){
        return $this->hasMany(Hopeewinner::class);
    }

    public function feedbacks(){
        return $this->hasMany(Feedback::class);
    }
    public function withdraws(){
        return $this->hasMany(Withdraw::class);
    }

    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\VerifyEmailQueued);
    }
    public function kameetis(){
       return $this->belongsToMany(Kameeti::class)->withPivot(['cnic_front','cnic_back','signature','registered']);
    }

}
