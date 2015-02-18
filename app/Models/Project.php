<?php
namespace ResearchMonster\Models;
use Eloquent;
class Project extends Eloquent {

    public function skills()
    {
        return $this->belongsToMany('ResearchMonster\Models\Skill', 'project_skills', 'project_id', 'skill_id');
    }

    public function user()
    {
        return $this->belongsTo('ResearchMonster\Models\User', 'user_id', 'id');
    }

    public function interestedUsers()
    {
        return $this->belongsToMany('ResearchMonster\Models\User');
    }

    public function files()
    {
        return $this->hasMany('ResearchMonster\Models\PFile', 'project_files');
    }
}