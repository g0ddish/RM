<?php
namespace ResearchMonster\Models;
use Eloquent;
class PFile extends Eloquent {

    protected $table = 'files';

    public function projects()
    {
        return $this->belongsTo('ResearchMonster\Models\Project');
    }


}