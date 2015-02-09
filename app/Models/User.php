<?php
use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

class User extends SentryModel {

    public function programs()
    {
        return $this->belongsToMany('Program', 'users_programs', 'user_id', 'program_id');
    }

    public function skills()
    {
        return $this->belongsToMany('Skill', 'users_skills', 'user_id', 'skill_id');
    }

    public function interestedProjects()
    {
        return $this->belongsToMany('Project');
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