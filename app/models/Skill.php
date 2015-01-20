<?php

class Skill extends Eloquent {

    protected $table = 'skills';
    protected $fillable = array('name');

    public function users()
    {
        return $this->belongsToMany('User');
    }


}