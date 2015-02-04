<?php

class Skill extends Eloquent {

    protected $table = 'skills';
    protected $fillable = array('name');
    //wiki api for searching skills 1 sentence
//http://en.wikipedia.org/w/api.php?action=query&titles=PHP&prop=extracts&continue=&explaintext=&exsentences=1&format=json
    public function users()
    {
        return $this->belongsToMany('User', 'users_skills');
    }

    public function projects()
    {
        return $this->belongsToMany('Project', 'project_skills');
    }


}