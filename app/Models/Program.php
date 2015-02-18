<?php
namespace ResearchMonster\Models;
use Eloquent;
class Program extends Eloquent {

    protected $table = 'programs';
    protected $fillable = array('ProgramName', 'S_ID');

    public function users()
    {
        return $this->belongsToMany('ResearchMonster\Models\User');
    }

}