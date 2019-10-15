<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //determines which fields can be filled with data
    protected $fillable = [
        'title',
        'description'
    ];

    //Opposite of $fillable, you'd add what can't be filled
    protected $guarded = [

    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
};
