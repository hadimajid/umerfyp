<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    protected $guarded = [];

    public function Users(){
        return $this->belongsToMany(User::class)->withPivot(['todaypayment','security','yesterdaypayment','twodaybeforepayment','amountdeposited'])->withTimestamps();
    }

    public function hopees(){
        return $this->hasMany(Hopeewinner::class);
    }

}
