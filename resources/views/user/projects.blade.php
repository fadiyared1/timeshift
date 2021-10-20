@extends('layouts.tailwinduser')
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
            Project
        </div>
    </div>

    @foreach($projects as $pro)

    <div class="grid custom-grid bg-white <?php if($pro->id == $proj){ echo 'bg-gray-200';} ?> ">
        <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
            {{$pro->name}}
        </div>
    </div>
    @endforeach
</div>
</div>
@endsection