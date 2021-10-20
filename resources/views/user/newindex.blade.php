@extends('layouts.tailwinduser')
@section('head')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
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
<div id="users_content" class="align-middle w-full sm:px-6 py-6">
@if (session('success'))
                <div id="sucgreen" class="px-3 py-2 mb-5 border border-green-800 rounded border-l-8 bg-green-200 text-sm text-green-700">
                   {{ session('success') }}
                </div>
             @endif
             @if (session('error'))
               <div id="error" class="px-3 py-2 mb-5 border border-red-800 rounded border-l-8 bg-red-200 text-sm text-red-700">
                     {{ session('error') }}
               </div>
             @endif
    <div class="shadow border-b border-gray-200 sm:rounded-lg mb-10 divide-y divide-gray-200">
        <div class="grid custom-grid bg-gray-50 sm:rounded-t-lg">

            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Task
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Project
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Type
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Tags
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Description
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Latest Comment
            </div>
            <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                Date
            </div>
            <div class="p-3 flex items-center justify-center text-xs leading-4 font-medium text-gray-500 col-span-2">
                Start - End
            </div>
            <div class=""></div>
            <div class=""></div>

        </div>

        <!-- Odd row -->
        <form method= "POST" action="{{route('createtask')}}" id="hi">
        @csrf
        <div class="grid custom-grid bg-white sm:rounded-b-lg">
            
            <div class="px-3 py-2">
                <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Current Task" name="name">
            </div>
            <div class="px-3 py-2">
                <div class="form-group">
                    <select name="project" class="chosen-select border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Specify Project">
                      @foreach($proj as $p)
                      <option value="{{$p->name}}">{{$p->name}}</option>
                    @endforeach
                    </select>
                    </div>
            </div>
            <div class="px-3 py-2">
                <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Type" name="type">
            </div>
            <div class="px-3 py-2">
                
                    <div class="form-group">
                      <select name="tags[]" class="chosen-select border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Specify Tags" multiple>
                        @foreach($tags as $tag)
                        <option value="{{$tag->name}}">{{$tag->name}}</option>
                      @endforeach
                      </select>
                      </div>
              </div>
            <div class="px-3 py-2">
                <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Short Desc." name="description">
            </div>

            <div class="px-3 py-2 text-center text-sm leading-5 text-gray-500"></div>
            <div class="px-3 py-2">
            <input type="date" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm" name="day">
            </div>
            <div class="px-3 py-2 text-center col-span-2">
                <input type="time" class="outline-none px-0.5 text-gray-500 text-sm border border-1 mx-0.5 rounded-sm" name="start">-<input type="time" class="outline-none px-0.5 text-gray-500 text-sm border border-1 mx-0.5 rounded-sm" name="end">
            </div>
            <div class="px-3 py-2 text-center text-sm leading-5 text-gray-500">
                <button type="submit" value="Submit" class="px-2 py-1 font-semibold bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">
                            Save
                </button>
            </div>
            
        </div>
        </form>


    </div>
    <div id="table1" class="shadow border-b border-gray-200 sm:rounded-lg mb-10 divide-y divide-gray-200">

        <div class="grid custom-grid bg-gray-50 sm:rounded-t-lg">
            <div class="col-span-2 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                <div class="col-span-10 bg-gray-50 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                    {{-- <form action="{{route('user.chdate')}}" method="POST" id="datechangeform">
                        @csrf --}}
                    <input id="datepicker" name="date" class="px-2 py-1 bg-transparent border text-xs leading-4 font-medium text-gray-500 rounded-sm focus:outline-none" type="date" value="{{$today}}" onchange="changedate()">
                    {{-- </form> --}}
                </div>
            </div>
        </div>

        @foreach($tasks as $task)

        <div class="grid custom-grid bg-white">
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                {{$task->name}}
            </div>
            {{-- <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center"> --}}
            <div class="text-gray-500  flex items-center">
                <div class="flex items-center flex-wrap">
                    <a href="/user/{{$task->project()->id}}/projects" class="text-sm px-2 mx-2 border border-1 border-gray-200 rounded-lg">{{$task->project()->name}}</a>
                </div>
            </div>
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                {{$task->Type}}
            </div>
            <div class="p-3 text-gray-500  flex items-center">
                <div class="flex items-center flex-wrap">
                    @foreach($task->tags as $tag)
                        <a href="/user/{{$tag->id}}/tags" class="text-sm px-2 mx-2 border border-1 border-gray-200 rounded-lg">{{ $tag->name}}</a>
                    @endforeach
                </div>

            </div>
            <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                {{$task->description}}
            </div>
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                <div class="flex w-full">
                    <div class="truncate">{{$task->latestComment}}</div>&nbsp<a href="#" class="seemore text-gray-700 underline font-thin flex-shrink-0">see more</a>
                </div>
            </div>
            <div class=" px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center ">
                {{$task->day}}
            </div>
            <div class="col-span-2 px-3  py-2 truncate justify-center flex items-center text-sm leading-5 font-medium text-gray-500">
                  @if($task->end == "00:00:00")
                  {{-- Still pending --}}
                  <a href="/user/{{$task->id}}/taskend"><button class="px-2 py-1 font-semibold bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">End Pending Task</button></a>
                  @else

                    {{$task->start}} - {{$task->end}}

                  @endif
            </div>
            <div class="px-6 flex items-center justify-center">

                <div class="flex items-center justify-around w-full">

                    <div class="relative flex flex-col">
                        <button value="{{$task->id}}" class="focus:outline-none more_butt">
                            <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                        </button>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
            <!-- /////////////////////////////////////////// delete popup /////////////////////////////////////////// -->
            <div id="delTask_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <div class="fixed inset-0 transition-opacity">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <!-- This element is to trick the browser into centering the modal contents. -->
                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#x200B;

                <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                    <div class="sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: exclamation -->
                            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
</svg>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

                            <div class="mt-2">
                                <h3 class="text-base leading-6 font-medium text-gray-600">
                                    Are you sure you want to delete this task?
                                </h3>
                                <!--<input name ="iduser" class="actionDelete" value="" type="hidden">-->
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-5 sm:mt-4 sm:ml-10 sm:pl-4 sm:flex">
                        <span class="flex w-full rounded-md shadow-sm sm:w-auto">
<a class="taskDelete" href=""><button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
    Delete
</button></a>
</span>
                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
<button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="DelTask()">
    Cancel
</button>
</span>
                    </div>
                </div>
            </div>
        </div>
     <!-- /////////////////////////////////////////// delete popup /////////////////////////////////////////// -->
 <script>
     let seemore = document.getElementsByClassName("seemore");
          [...seemore].forEach(element => {
              element.addEventListener("click", function() {
                  seeMore(element);
              });
          });

     function seeMore(el) {
      let fulltext = el.parentElement.getElementsByClassName("truncate")[0];
      let seeless = el.parentElement.getElementsByClassName("seeless")[0];
      if (fulltext && !seeless) {
          el.innerHTML = "see less";
          el.parentElement.classList.remove("flex");
          fulltext.classList.remove("truncate");
          fulltext.classList.add("seeless");
      } else if (!fulltext && seeless) {
          el.innerHTML = "see more";
          el.parentElement.classList.add("flex");
          seeless.classList.remove("seeless");
          seeless.classList.add("truncate");
      }
  }
     </script>
     <script>
    /*     $(document).ready(function() {
  $('#datepicker').change(function () {
          $('#datechangeform').submit(); // <-- SUBMIT
  });
});*/
function changedate(){
    var d = document.getElementById('datepicker').value;
    window.location.href ="/user/chdate/"+d;
}
         </script>
@endsection