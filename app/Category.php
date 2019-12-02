<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function projects() {
        return $this->hasMany('App\Project');
    }

    public function tasks() {
        return $this->hasMany('App\Task');
    }

    public function departments() {
        return $this->hasMany('App\Department');
    }
}
