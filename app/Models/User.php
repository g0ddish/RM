<?php
namespace ResearchMonster\Models;

use Cartalyst\Sentry\Users\Eloquent;

use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

class User extends SentryModel {

    public function programs()
    {
        return $this->belongsToMany('ResearchMonster\Models\Program', 'users_programs', 'user_id', 'program_id');
    }

    public function skills()
    {
        return $this->belongsToMany('ResearchMonster\Models\Skill', 'users_skills', 'user_id', 'skill_id');
    }

    public function ownedProjects()
    {
        return $this->hasMany('ResearchMonster\Models\Project');
    }

    public function interestedProjects()
    {
        return $this->belongsToMany('ResearchMonster\Models\Project');
    }

    public function hasAdminPermission(){
        foreach($this->getMergedPermissions() as $perm => $val){
            if($perm == "admin"){
                return true;
            }
        }
        return false;
    }

    public function hasProjectCRUDPermission(){
        foreach($this->getMergedPermissions() as $perm => $val){
            if($perm == "crudprojects"){
                return true;
            }
        }
    return false;
    }
}