<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }

    public function created_by() {
        return $this->belongsTo('App\User', "user_id");
    }
}
