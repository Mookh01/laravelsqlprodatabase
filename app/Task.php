<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = [];
    //Complete
    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }

    //Incomplete
    public function incomplete()
    {
        $this->complete(false);
    }
    
    //Project: this queries to find the associated project. 
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    //public function complete($completed = true)
    //{
        //return $this->update(['completed' => true]);
    //}
}
