<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hopeewinner extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function set(){
        return $this->belongsTo(Set::class);
    }
}
