@extends('layouts.app2')
@section('head')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.proto.js"></script>
  <script>
    jQuery(document).ready(function(){
  jQuery(".chosen-select").chosen({
      width: "95%",
      no_results_text: "No result found. Press enter to add "
    }
  ).on('chosen:no_results', function(evt, data){
    //console.log(evt, data, data.chosen.get_search_text(), jQuery(data.chosen.form_field));
    jQuery(data.chosen.container).on('keydown', function( event ){
        console.log(jQuery(data.chosen.form_field).find('option[value="' + data.chosen.get_search_text() + '"]').length);
      
      if( 13 == event.keyCode && ! jQuery(data.chosen.form_field).find('option[value="' + data.chosen.get_search_text() + '"]').length ){
        jQuery(data.chosen.form_field).append('<option value="' + data.chosen.get_search_text() + '" selected>' + data.chosen.get_search_text() + '</option>');
    jQuery(data.chosen.form_field).trigger('chosen:updated');
   data.chosen.result_highlight = data.chosen.search_results.find('li.active-result').lasteturn;
      data.chosen.result_select(evt);
      }
      });
});
});
  </script>
@endsection
@section('content')
@if (session('message'))
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
@endif
<form method= "POST" action="{{route('createtask')}}">
  @csrf
<table class="table">
    <thead>
      <tr>
        <th scope="col">Task</th>
        <th scope="col">Project</th>
        <th scope="col">Type</th>
        <th scope="col">Tags</th>
        <th scope="col">Description</th>
        <th scope="col">Latest Comments</th>
        <th scope="col">Date</th>
        <th scope="col">Start</th>
        <th scope="col">End</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td><div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                </div>
            </td>
            <td><div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="project">
                </div>
            </td>
            <td><div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="type">
                </div>
            </td>
            <td><div class="form-group">
              <select name="tags[]" class="chosen-select form-control" placeholder="Tags" multiple>
                @foreach($tags as $tag)
                <option value="{{$tag->name}}">{{$tag->name}}</option>
              @endforeach
              </select>
              </div>
          </td>
            <td><div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="description">
                </div>
            </td>
            <td><div class="form-group">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="latestComment">
                </div>
            </td>
            <td><div class="col-md-3 mb-3">
              <input id="appt-date" type="date" name="day" required>
              </div>
          </td>
            <td><div class="col-md-3 mb-3">   
                <input id="start" type="time" name="start" required>
                </div>
            </td>
            <td><div class="col-md-3 mb-3">
                <input id="end" type="time" name="end">
                </div>
            </td>
            <td><input type="submit" value="Submit" class="btn btn-dark">
            </td>

          </form>
        </tr>
        <tr style="background-color: gray">
        </tr>
     @foreach($tasks as $task)
      <tr>
       
        <th scope="row">{{$task->name}}</th>
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
        <td>{{$task->start}}</td>
        <td>@if($task->end == "00:00:00")
          Task Pending
          @else
          {{$task->end}}
        @endif
        </td>
        <td><!--<button class="btn btn-dark" href="/user/{{$task->id}}/edit">Edit</button>--></td>
      </tr>
     @endforeach
    </tbody>
  </table>

  <script type="text/javascript">
 setInterval(checkTime(){ 
    //this code runs every second 
}, 1000);
    function checkTime(){
                var startTimeValue = document.getElementById("start").value;
                var endTimeValue = document.getElementById("end").value;
     
                if( startTimeValue > endTimeValue) {
                    alert("End Time should be greater than Start Time");
                    return false;
                }
     
                return true;
     
            }
          
    </script>
  @endsection