<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Task extends Model
{
    public function project() {
        return $this->belongsTo('App\Project');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function reporter() {
        return $this->belongsTo('App\User', "followup");
    }

    public function given() {
        return $this->belongsTo('App\User', "given_by");
    }

    public function department() {
        return $this->belongsTo('App\Department');
    }

    public function logs() {
        return $this->hasMany('App\Log');
    }

    public function assignee() {
        return $this->belongsToMany('App\User');
    }

    public function assignUser( $user ) {
        return $this->assignee()->attach( $user );
    }

    public function removeUser( $user ) {
        return $this->assignee()->detach( $user );
    }

    public function updateUser( $users ) {
        return $this->assignee()->attach( $users );
    }
}
