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
  <form action="{{route('admin.testchangep')}}" method="POST">
    @csrf
      <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
              <div>
                  <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
              </div>



              <div class="space-y-1">
                  <div class="col-span-3 space-y-1 mb-4">
                      <label class="block text-sm leading-5 font-medium text-gray-700">
            Photo
          </label>
                      <div class="flex items-center">
                          <span class="inline-block bg-gray-100 rounded-full overflow-hidden h-16 w-16">
              <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </span>
                   <!--       <span class="ml-5 rounded-md shadow-sm">
              <button type="button" class="border border-gray-300 rounded-md py-2 px-3 text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                Change
              </button>
            </span>-->
                      </div>
                  </div>
                  <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                          <label for="username" class="block text-sm font-medium leading-5 text-gray-700">Username</label>
                          <input id="username" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$user->name}}" readonly/>
                      </div>
                      <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                        <input id="email" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="{{$user->email}}" readonly/>
                    </div>
                  </div>
              </div>


              <div>
                  <h2 class="text-lg leading-6 font-medium text-gray-900">Change Password</h2>
              </div>

              <div class="grid grid-cols-6 gap-6">
                 

                  <div class="col-span-6 sm:col-span-4">
                    <label for="oldpass" class="block text-sm font-medium leading-5 text-gray-700">Old Password</label>
                    <input id="oldpass" name="current_password" type="password" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
                  </div>
                  <div class="col-span-6 sm:col-span-4">
                    <label for="newpass" class="block text-sm font-medium leading-5 text-gray-700">New Password</label>
                    <input id="newpass" name="new_password" type="password" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <label for="confpass" class="block text-sm font-medium leading-5 text-gray-700">Confirm Password</label>
                    <input id="confpass" name="new_password_confirmation" type="password" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" required/>
              </div>

              </div>

<button type="submit" class="bg-gray-600 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
          Save
        </button>

          </div>
      </div>
     <!-- <div class="px-4 py-3 bg-gray-50 flex justify-between items-center sm:px-6">
          
          

      </div>-->
</div>
</form>
</div>
@endsection