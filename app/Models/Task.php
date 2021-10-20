<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function tags()
    {
       //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
       return $this->belongsToMany(
            Tag::class,
            'tag_task',
            'task_id',
            'tag_id');
    }
    public function project()
    {
        return Project::where('id',$this->project_id)->first();
    }
    public function user(){
        return User::where('id',$this->user_id)->first();
    }
}
