<?php

class Project extends Eloquent {

    public function skills()
    {
        return $this->belongsToMany('Skill', 'project_skills', 'project_id', 'skill_id');
    }

    public function user()
    {
        return $this->belongsTo('User', 'user_id', 'id');
    }
}