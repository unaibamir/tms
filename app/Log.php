<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Log extends Model
{
    public function tasks() {
        return $this->belongsTo('App\Task', 'task_id', 'id');
    }

    public function users() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
