<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function indexuser(){
        $proj = -1;
        $projects = Project::all();
        return view('user.projects')->with(['proj'=>$proj, 'projects' => $projects]);
    }
    public function projectshowuser($id){
        $proj = $id;
        $projects = Project::all();
        return view('user.projects')->with(['proj'=>$proj, 'projects' => $projects]);
    }
    public function indexadmin(){
        $proj = -1;
        $projects = Project::all();
        return view('admin.projects')->with(['proj'=>$proj, 'projects' => $projects]);
    }
    public function projectshowadmin($id){
        $proj = $id;
        $projects = Project::all();
        return view('admin.projects')->with(['proj'=>$proj, 'projects' => $projects]);
    }
}
