@extends('layouts.tailwind')
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

<div id="table1" class="shadow border-b border-gray-200 sm:rounded-lg mb-10 divide-y divide-gray-200">

    <div class="grid custom-grid bg-gray-50 sm:rounded-t-lg">
        <div class="col-span-2 p-3 whitespace-no-wrap text-left text-sm leading-4 font-medium text-gray-500">
            User
        </div>
        <div class="col-span-2 p-3 whitespace-no-wrap text-left text-sm leading-4 font-medium text-gray-500">
            Attendance
        </div>
        <div class="col-span-2 p-3 whitespace-no-wrap text-left text-sm leading-4 font-medium text-gray-500">
            Start
       </div>
       <div class="col-span-2 p-3 whitespace-no-wrap text-left text-sm leading-4 font-medium text-gray-500">
            End
   </div>
    </div>

    @foreach($users as $user)
    @if($user->name != "Administrator")
    <div class="grid custom-grid bg-white">
        <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
            {{$user->name}}
        </div>
        <?php  $tdy = Carbon\Carbon::now()->format('Y-m-d');?>
        
        @if($user->attendance($tdy)->count()>0)
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
            Attended
            </div>
            
            <?php $max='00:00:00'; $min ='23:59:59'?>  
            @foreach($user->attendance($tdy) as $att)
            <?php     
            if(strtotime($att->start) < strtotime($min))
            {
                $min = $att->start;
            }
            if(strtotime($att->end) > strtotime($max))
            {
                $max = $att->end;
            }
            ?>
            @endforeach
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
                {{$min}}
            </div>
            @if ($max == '00:00:00')
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
                Still working till now
            </div>
            @else
            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
                {{$max}}
            </div>
            @endif
        @else

            <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center col-span-2">
            Did not attend today
            </div>

        @endif
        </div>
    @endif
    @endforeach
</div>
</div>
@endsection