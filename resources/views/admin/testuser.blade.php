@extends('layouts.tailwind')
@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <div class="flex justify-between pb-4">
        <div class="flex">
            <select onchange="getSelectedVal()" class="focus:outline-none py-1 px-2 bg-gray-50 border border-gray-400 text-sm rounded-md" name="filter" id="filter_users">
                <option value="">--Default--</option>
                <option value="all">Show All</option>
                <option value="suspended">Suspended</option>
                <option value="invited">Invited</option>
                <option value="admin">Admin</option>
            </select>
            <input id="myInput" onkeyup="myFunction()" class="focus:outline-none bg-gray-50 py-1 px-2 mx-2 text-sm border border-gray-400 rounded-md" type="text" placeholder="Search by email">
        </div>
        <button class="text-sm bg-gray-500 hover:bg-gray-400 text-white px-2 rounded-md focus:outline-none" onclick="ShowHideinv()">
            Invite Users
        </button>
    </div>
    <div class="shadow border-b border-gray-200 sm:rounded-lg mb-10">
        <div id="admin_users_table" class="grid grid-cols-1">

            <div class="grid grid-cols-6 gap-x-3 bg-gray-50 px-6 rounded-t-md">
                <div class="py-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                    Name
                </div>
                <div class="py-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                    Email
                </div>
                <div class="py-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                    Role
                </div>
                <div class="py-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                    Created At
                </div>
                <div class="py-3 whitespace-no-wrap text-center text-xs leading-4 font-medium text-gray-500">
                    Actions
                </div>
                <div class="py-3 whitespace-no-wrap text-center text-xs leading-4 font-medium text-gray-500">
                    Suspend
                </div>
            </div>
            <!-- row -->
            @foreach($users as $user)
            <div class="bg-white grid grid-cols-6 gap-x-3 px-6">
                <div class="py-2 text-left text-sm leading-5 text-gray-500">
                    {{$user->name}}
                </div>
                <div class="py-2 text-left text-sm leading-5 text-gray-500 email_user" >
                    {{$user->email}}
                </div>
                <div class="py-2 text-left text-sm leading-5 text-gray-500">
                   {{$user->roles->first()->name}}
                </div>
                <div class="py-2 text-left text-sm leading-5 text-gray-500">
                    {{$user->created_at}}
                </div>
                <div class="py-2 text-center">
                    <div class="relative inline">
                    <button value="{{$user->id}},{{$user->name}},{{$user->email}},{{$user->job}},{{$user->email_verified_at}}" class="w-6 h-6 focus:outline-none users_actions relative">
                                <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>    
                        </button>
                    </div>
               </div>

                <div class="py-2 text-center">
                    <div class="relative inline">
                        @if($user->suspend == 0)
                        
                          <a href="/admin/{{$user->id}}/suspend">  <button class="w-6 h-6 focus:outline-none">
                                <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            </button></a>
                        @else
                        <a href="/admin/{{$user->id}}/open"> <button class="w-6 h-6 focus:outline-none">
                                <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </button></a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
             <!-- /////////////////////////////////////////// delete popup /////////////////////////////////////////// -->
             <div id="del_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#x200B;

                    <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
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
                                        Are you sure you want to delete the user: <p class="confmsg inline font-bold"></p>?
                                    </h3>
                                    <!--<input name ="iduser" class="actionDelete" value="" type="hidden">-->
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 sm:mt-4 sm:ml-10 sm:pl-4 sm:flex">
                            <span class="flex w-full rounded-md shadow-sm sm:w-auto">
    <a class="actionDelete" href=""><button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
      Delete
    </button></a>
  </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="ShowHidedel()">
      Cancel
    </button>
  </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /////////////////////////////////////////// delete popup /////////////////////////////////////////// -->

            
            <!-- /////////////////////////////////////////// Edit popup /////////////////////////////////////////// -->
            <div id="edit_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen px-4 sm:p-0 bg-gray-500 bg-opacity-75">

                    <form class="w-1/4 mx-auto bg-white p-5 rounded-lg" method="POST" action="{{ route('edituser') }}">
                        @csrf
                        
                        <div>
                            <div class="pt-2">
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Edit user
                                    </h3>
                                    <input name ="iduser" class="actionEdit" value="" type="hidden">
                                </div>
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                    <div class="sm:col-span-6">
                                        
                                        <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                          Name
                        </label>
                                        <div class="mt-1">
                                            <input required id="name" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 editformname" name="name" value=""/>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700" >
                          Email address
                        </label>
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input required id="email" type="email" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 editformemail" name="email" value="" required autocomplete="email"/>
                                        </div>
                                    </div>


                                    <div class="sm:col-span-6">
                                        <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">
                          Job
                        </label>
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input required id="street_address" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5 editformjob" name="job" value="" required autocomplete="job"/>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-6">
                                        <label for="city" class="block text-sm font-medium leading-5 text-gray-700">
                          Password
                        </label>
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input type="password" id="city" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" name="password" autocomplete="new-password" placeholder="leave empty to keep the current password"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-5">
                            <div class="flex justify-end">
                                <span class="inline-flex rounded-md shadow-sm">
                      <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out "  onclick="ShowHideedit()">
                        Cancel
                      </button>
                    </span>
                                <span class="ml-3 inline-flex rounded-md shadow-sm">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Save
                      </button>
                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /////////////////////////////////////////// Edit popup /////////////////////////////////////////// -->
           
            <!-- /////////////////////////////////////////// Resend popup ///////////////////////////////////////// -->
            <div id="resend_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                    <div class="fixed inset-0 transition-opacity">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                    </div>

                    <!-- This element is to trick the browser into centering the modal contents. -->
                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>&#x200B;

                    <div class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-xl sm:w-full sm:p-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div class="sm:flex sm:items-start">
                            <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 sm:mx-0 sm:h-10 sm:w-10">
                                <!-- Heroicon name: exclamation -->
                                <svg class="h-6 w-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
    </svg>
                            </div>
                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

                                <div class="mt-2">
                                    <h3 class="text-base leading-6 font-medium text-gray-600">
                                        Are you sure you want to resend the activation link to the user: <p class="confmsg inline font-bold"></p>?
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-4 sm:ml-10 sm:pl-4 sm:flex">
                            <span class="flex w-full rounded-md shadow-sm sm:w-auto">
    <a class="actionResend" href=""><button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
      Resend
    </button></a>
  </span>
                            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:ml-3 sm:w-auto">
    <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5" onclick="ShowHideres()">
      Cancel
    </button>
  </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /////////////////////////////////////////// Resend popup /////////////////////////////////////////// -->
            
            <!-- /////////////////////////////////////////// Invite popup /////////////////////////////////////////// -->
            <div id="invite_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                <div class="flex items-center justify-center min-h-screen px-4 sm:p-0 bg-gray-500 bg-opacity-75">

                    
                        <form class="w-1/4 mx-auto bg-white p-5 rounded-lg" method="POST" action="{{ route('adregister') }}">
                            @csrf
                        <div>
                            <div class="pt-2">
                                <div>
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                                        Invite user
                                    </h3>
                                </div>
                                <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">


                                    <div class="sm:col-span-6">
                                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                          Email address
                        </label>
                                        <div class="mt-1 rounded-md shadow-sm">
                                            <input required name="email" id="email" type="email" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                            <input type="hidden" id="name" name="name" value="{{$name}}">
                                            <input type="hidden" id="password" name="password" value="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-8 border-t border-gray-200 pt-5">
                            <div class="flex justify-end">
                                <span class="inline-flex rounded-md shadow-sm">
                      <button type="button" class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out "  onclick="ShowHideinv()">
                        Cancel
                      </button>
                    </span>
                                <span class="ml-3 inline-flex rounded-md shadow-sm">
                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Invite
                      </button>
                    </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("admin_users_table");
      tr = table.getElementsByClassName("bg-white grid grid-cols-6 gap-x-3 px-6");
    
      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByClassName("py-2 text-left text-sm leading-5 text-gray-500 email_user")[0];
       // td = tr[i].getElementsById("email_user")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    function getSelectedVal(){
        var input = document.getElementById("filter_users");
        var val = input.value;
        if(val == "all"){
            window.location.href="/admin/testusers";
            input.value="all";
        }
        if(val == "suspended"){
            window.location.href="/admin/testusus";
            input.value="suspended";
        }
        if(val == "invited")
        {
            window.location.href="/admin/testuinv";
            input.value="invited";
        }
        if(val == "admin")
        {
            window.location.href="/admin/testuad";
            input.value="admin";
        }
    }
    </script>

@endsection