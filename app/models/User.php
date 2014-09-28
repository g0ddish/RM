<?php

use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

class User extends SentryModel {

    public function programs()
    {
        return $this->belongsToMany('Program', 'users_programs', 'user_id', 'program_id');
    }
}