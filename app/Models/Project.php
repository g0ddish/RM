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

    public function interestedUsers()
    {
        return $this->belongsToMany('User');
    }

    public function files()
    {
        return $this->hasMany('PFile', 'project_files');
    }
}