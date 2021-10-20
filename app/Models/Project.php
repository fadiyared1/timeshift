<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function worktoday(){
        $today = date("Y-m-d");
        return Task::where('project_id',$this->id)->where('day', $today)->get();
    }
}
