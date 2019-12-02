<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{
    public function tasks() {
        return $this->hasMany('App\Task');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
