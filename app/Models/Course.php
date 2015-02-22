<?php
namespace ResearchMonster\Models;
use Eloquent;
class Course extends Eloquent {

    protected $table = 'courses';

    public function user()
    {
        return $this->belongsTo('ResearchMonster\Models\User');
    }


}