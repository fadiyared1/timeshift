@extends('layouts.app1')
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<table class="table table-bordered table-sm ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Task</th>
        <th scope="col">Project</th>
        <th scope="col">Type</th>
        <th scope="col">Tags</th>
        <th scope="col">Description</th>
        <th scope="col">Latest Comments</th>
        <th scope="col">Date</th>
        <th scope="col">Start - End</th>
        <th scope="col">Total</th>   
      </tr>
    </thead>
    <tbody>
     @foreach($users as $user)
     <!--{{$i=0}}-->
     <tr class="table-secondary clickable" data-toggle="collapse" data-target="#group-of-rows-{{$user->id}}" aria-expanded="false" aria-controls="group-of-rows-{{$user->id}}">
      <td colspan="9" style="text-align: center"  class="thead-dark"><i class="fa fa-folder-open">{{$user->name}}</th>
      </tr>
    </tbody>
    
      @foreach($tasks as $task)
      @if($task->user_id == $user->id)
      <!--{{$i++}}-->
      <tbody id="group-of-rows-{{$user->id}}" class="collapse">
      <tr class="table-warning">
        <td><i class="fa fa-folder-open">{{$task->name}}</i></th>
        <td>{{$task->project}}</td>
        <td>{{$task->Type}}</td>
        <td>
          @foreach($task->tags as $tag)
          {{ $tag->name}},
          @endforeach
        </td>
        <td>{{$task->description}}</td>
        <td>{{$task->latestComment}}</td>
        <td>{{$task->day}}</td>
        <td>{{$task->start}} - {{$task->end}}</td>
       <td>
       {{\Carbon\Carbon::parse($task->start)->diff(\Carbon\Carbon::parse($task->end))->format('%H:%i:%s')}}</td>
      </tr>  
     </tbody>      
      @endif
      @endforeach
      @if($i==0)
      <tbody id="group-of-rows-{{$user->id}}" class="collapse">
        <tr class="table-warning">
          <td colspan="9"><i class="fa fa-folder-open">No Tasks Yet()</i></td>
        </tr>
      </tbody>
      @endif
     @endforeach
@endsection