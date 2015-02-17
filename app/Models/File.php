<?php

class PFile extends Eloquent {

    protected $table = 'files';

    public function projects()
    {
        return $this->belongsTo('Project');
    }


}