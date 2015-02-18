<?php
namespace ResearchMonster\Models;
use Eloquent;
class Skill extends Eloquent {

    protected $table = 'skills';
    protected $fillable = array('name');
    //wiki api for searching skills 1 sentence
    public function users()
    {
        return $this->belongsToMany('ResearchMonster\Models\User', 'users_skills');
    }

    public function projects()
    {
        return $this->belongsToMany('ResearchMonster\Models\Project', 'project_skills');
    }


}