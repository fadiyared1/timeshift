@extends('layouts.tailwind')
@section('content')

<div class="flex flex-col">
  <div class="flex h-screen overflow-y-auto bg-gray-100">

      <div class="flex flex-col w-0 flex-1 overflow-hidden">
          <main id="main" class="flex-1 relative overflow-y-auto focus:outline-none">
              <div class="p-5">
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
                          <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500 col-span-2">
                              Latest Comment
                          </div>
                          <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                              Date
                          </div>

                          <div class="p-3 flex items-center justify-center text-xs leading-4 font-medium text-gray-500">
                              Start - End
                          </div>
                          <div class="p-3 flex items-center text-xs leading-4 font-medium text-gray-500">
                              Total
                          </div>

                      </div>
                      @foreach($users as $user)
                      <!-- row -->
                      <div class="grid custom-grid name_w_data">
                          <button class="name w-full flex px-5 hover:bg-gray-100 bg-white focus:outline-none col-span-10">
                          <div class="text-sm leading-4 text-gray-500 py-3">
                            {{$user->name}}
                          </div>
                          </button>
                          <div class="tocollapse hidden grid-cols-1 col-span-10 ">
                            <div class="w-full">
                              <div class="col-span-2 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                                  {{-- Today <?php /*$mytime = \Carbon\Carbon::now()->format('d-m-Y');
                                  echo $mytime*/ ?> --}}
                                              <div class="col-span-2 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                                                <div class="col-span-10 bg-gray-50 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                                                    {{-- <form action="{{route('user.chdate')}}" method="POST" id="datechangeform">
                                                        @csrf --}}
                                                    <input id="datepicker" name="date" class="px-2 py-1 bg-transparent border text-xs leading-4 font-medium text-gray-500 rounded-sm focus:outline-none" type="date" value="{{$today}}" onchange="changedate()">
                                                    {{-- </form> --}}
                                                </div>
                                            </div>
                              </div>
                          </div>
                            @foreach($tasks as $task)
                            @if($task->user_id == $user->id)
                              <div class="grid custom-grid bg-gray-50">

                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500">
                                    {{$task->name}}
                                  </div>
                                  <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                      <a href="/admin/{{$task->project()->id}}/projects" class="text-xs px-2 mx-2 border border-1 border-gray-200 rounded-lg">{{$task->project()->name}}</a>
                                    </div>
                                  </div>
                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500">
                                    {{$task->Type}}
                                  </div>
                                  <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                    @foreach($task->tags as $tag)
                                    <a href="/admin/{{$tag->id}}/tags" class="text-xs px-2 mx-2 border border-1 border-gray-200 rounded-lg">{{$tag->name}}</a>
                                    @endforeach
                                    </div>
                                  </div>
                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500">
                                    {{$task->description}}
                                  </div>
                                  <div class="p-3 text-xs flex flex-col justify-between leading-4 text-gray-500  col-span-2">
                                    <div class="flex">
                                        <div class="truncate">{{$task->latestComment}}</div>&nbsp<a href="#" class="seemore text-gray-700 underline font-thin flex-shrink-0">see more</a>
                                    </div>
                                    <div class="flex mt-2">
                                        <a  value="{{$task->id}},{{$task->name}}" href="#" class="add_cmnt_butt mr-2 bg-gray-200 text-gray-700 font-semibold px-2 py-1 rounded hover:bg-gray-300">Change Comment</a>
                                        <!-- <a href="" class="bg-gray-200 text-gray-700 font-semibold px-2 py-1 rounded hover:bg-gray-300">Comments History</a> -->
                                    </div>
                                </div><!--
                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500  col-span-2">
                                    {{$task->latestComment}}
                                  </div>-->
                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500">
                                    {{$task->day}}
                                  </div>

                                  <div class="p-3 flex items-center justify-center text-xs leading-4 text-gray-500">
                                    {{$task->start}} -
                                    @if($task->end != '00:00:00') 
                                    {{$task->end}}
                                    @else 
                                    <br> Still pending
                                    @endif
                                  </div>
                                  <div class="p-3 flex items-center text-xs leading-4 text-gray-500">
                                    @if($task->end != '00:00:00') 
                                    {{\Carbon\Carbon::parse($task->start)->diff(\Carbon\Carbon::parse($task->end))->format('%H:%i:%s')}}
                                    @else 
                                    <br> No total yet
                                    @endif
                                    
                                  </div>

                              </div>
                              @endif
                              @endforeach
                          </div>
                      </div>
                       @endforeach
                  </div>
              </div>
          </main>
          <div id="add_cmnt" class="fixed inset-0 bg-black bg-opacity-80 z-20 hidden">
            <div class="pb-2 flex flex-col absolute w-1/2 bg-white transform top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2 rounded-lg transition-all duration-500 ease-in-out">
                <div class="flex items-center px-4 text-gray-600">
                    <div class="text-lg py-2 font-bold text-center flex-grow -mr-6 ">Change Comment</div>
                    <button onClick="close_cmnt()" class="focus:outline-none">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
                <div class="flex flex-col px-4 pt-6 pb-3">
                  <form method="POST" action="{{route('admin.testaddcom')}}" class="formfadi">
                    @csrf
                    <textarea name="text"class="rounded-t-md w-full border-2 h-28 resize-none text-sm text-gray-500 focus:outline-none p-0.5"></textarea>
                   <input id="hidden_id" type="hidden" name="id" value="" />
                    <div class="flex justify-end items-center px-4 py-2 bg-gray-200 rounded-b-md">
                        <button type="submit" class="rounded-md focus:outline-none px-2 py-1 text-gray-50 bg-gray-400 text-sm hover:bg-gray-600 transform duration-300 ease-in-out">Add Comment</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
         
      </div>
  </div>
</div>


<script>
  let userName = document.getElementsByClassName("name");
  [...userName].forEach(element => {
      element.addEventListener("click", function() {
          isCollapse(element)
      });

  });

  function isCollapse(el) {
      let toCollapse = el.parentElement.getElementsByClassName("tocollapse")[0];
      if (toCollapse && toCollapse.classList.contains("hidden")) {
          toCollapse.classList.add("grid");
          toCollapse.classList.remove("hidden");
          let seemore = toCollapse.getElementsByClassName("seemore");
          [...seemore].forEach(element => {
              element.addEventListener("click", function() {
                  seeMore(element);
              });
          });
          let addcmnt = toCollapse.getElementsByClassName("add_cmnt_butt");
          [...addcmnt].forEach(element => {
              element.addEventListener("click", function() {
                  //let taskid = element.getAttribute("value");
                  let str = element.getAttribute("value");
                  let res = str.split(",");
                  document.getElementById("add_cmnt").classList.remove("hidden");
                  document.getElementById("hidden_id").setAttribute("value", res[0]);

              });
          });

      } else if (toCollapse && toCollapse.classList.contains("grid")) {
          toCollapse.classList.add("hidden");
          toCollapse.classList.remove("grid");
      }
  }

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

  function close_cmnt() {
      document.getElementById("add_cmnt").classList.add("hidden");
  }
</script>
<script>
  function changedate(){
    var d = document.getElementById('datepicker').value;
    window.location.href ="/admin/chdate/"+d;
}
         </script>
@endsection