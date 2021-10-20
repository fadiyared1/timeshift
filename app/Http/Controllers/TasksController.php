<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\Tag;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use Carbon\Carbon;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function validtime(array $data)
    {
        return Validator::make($data, [
        'start' => 'date_format:H:i',
        'end' => 'date_format:H:i|after:start',
    ]);
    }

    public function store(Request $request)
    {  
        //dd($request->input('project'));
        $uid=Auth::id();
       // $validator = $this->validtime($request->all());
       $st = Carbon::parse($request->input('start'));
       $en = Carbon::parse($request->input('end'));
       if($st->gt($en))
        {
            //dd($st);
            return redirect()->back()->with('error','Start time must be before end time!!');
        }
        else
        {
           
            //dd($request->input('start'));
        $task = new task;
        $task->user_id=$uid;
        $task->name = $request->input('name');
        //$task->project = $request->input('project');
        $project = $request->input('project');
        if($project != null){
            $proj = Project::where('name', '=', $project)->first();
            if ($proj === null) 
             {
                    $p=new Project;
                    $p->name=$project;
                    $p->description = "";
                    $p->save();
                    $pp = Project::where('name', '=', $project)->first();
                    $task->project_id = $pp->id;
             }
             else{
                $task->project_id = $proj->id;
             }
        }
        $task->Type = $request->input('type');
        $task->description = $request->input('description');
        $task->latestComment = "";
        $task->day = $request->input('day');
        $task->start = $request->input('start');
        if($request->input('end') != null){

        $task->end = $request->input('end');
        }
        else{
            $task->end = Carbon::parse("00:00");
        }       
        $task->save();
        $tags=$request->input('tags');
        //dd($tags);
        foreach($tags as $tag)
        {   
            if($tag != null)
            {
            $tg = Tag::where('name', '=', $tag)->first();
            if ($tg === null) 
             {
                if($tag !== null)
                 {
                    $t=new Tag;
                    $t->name=$tag;
                    $t->save();
                 }
             }
            $t1=Tag::where('name', '=', $tag)->first();
            $task->tags()->attach($t1->id);
            }
        
        }
        return redirect()->back()->with('success','Task Successfuly added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task=Task::find($id);
        $tags=$task->tags();
        return view('user.edittask', ['tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function autocomplete(Request $request)
    {
        //dd($request);
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('tags')
           ->where('name', 'LIKE', "%{$query}%")
           ->get();
         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
         foreach($data as $row)
         {
          $output .= '
          <li><a href="#">'.$row->name.'</a></li>
          ';
         }
         $output .= '</ul>';
         echo $output;
        }
    }
    public function st(Request $request)
    {  
        $uid=Auth::id();
        // $validator = $this->validtime($request->all());
        $st = Carbon::parse($request->input('start'));
        $en = Carbon::parse($request->input('end'));
        if($st->gt($en))
         {
             //dd($st);
             return redirect()->back()->with('error','Start time must be before end time!!');
         }
         else
         {
             
         $task = new task;
         $task->user_id=$uid;
         $task->name = $request->input('name');
         //$task->project = $request->input('project');
         $task->Type = $request->input('type');
         $task->description = $request->input('description');
         $task->latestComment = "";
         $task->start = $request->input('start');
         $task->end = $request->input('end');
         $task->day = $request->input('day');
         $task->save();
         $tags=$request->input('tags');

         foreach($tags as $tag)
         {   
             if($tag != null)
             {
             $tg = Tag::where('name', '=', $tag)->first();
             if ($tg === null) 
              {
                 if($tag !== null)
                  {
                     $t=new Tag;
                     $t->name=$tag;
                     $t->save();
                  }
              }
             $t1=Tag::where('name', '=', $tag)->first();
             $task->tags()->attach($t1->id);
             }
         
         }
         return redirect()->back()->with('success','Task successfuly added!');
         }
    }
    public function taskdel($id)
    {
        $task = Task::where('id',$id)->first();
        $task->delete();
        return redirect()->back()->with('success','Task successfuly deleted!');
    }
    public function taskend($id){
        $task = Task::where('id',$id)->first();
        $task->end = now();
        $task->save();
        return redirect()->back()->with('success','Task successfuly ended!');
    }
}
