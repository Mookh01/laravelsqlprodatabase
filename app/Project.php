<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    //Opposite of $fillable, you'd add what can't be filled
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($task)
    {
        $this->tasks()->create($task);
    }


    //determines which fields can be filled with data
    // protected $fillable = [
    //     'title',
    //     'description'
    // ];

    // //1.
    //public function addTask($description)
    // //2.
    //public function addTask($task)
   //{
    //    dd('works fine here');
        //1.
        //$this->tasks()->create(['description' => $description]);
        //2.
        //$this->tasks()->create(compact('description'));
      
        //3.
        // return Task::create([
        //     'project_id' => $this->id,
        //     'description' => $description
        // ]);

        //4.
        //$this->tasks()->create($task);
   //}
};
