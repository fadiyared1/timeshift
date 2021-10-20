<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMESHIFT</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @yield('head')
</head>

<body>
    <div class="flex flex-col">

        <!-- search bar top edited -->
        <div class="z-10 flex-shrink-0 flex h-16 bg-white shadow">
            <button id="overlay" class="absolute hidden w-full h-full top-0 right-0 bottom-0 left-0 bg-black bg-opacity-20 z-20">
                
            </button>

            <div class="flex-1 flex justify-between">
                <div class="flex-1 flex items-center">
                    <button id="open-sidebar" class="mx-4 text-gray-400 focus:outline-none hover:text-gray-600" aria-label="Open sidebar">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                  </svg>
                </button>
                    <div class="flex items-center flex-shrink-0 px-2">
                        <div class="w-6 h-6 mr-1 -mb-0.5">
                            <svg class="w-full h-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>

                        <div class="font-bold text-2xl">TIMESHIFT</div>
                    </div>

                </div>
                <div class="ml-4 flex items-center md:ml-6 px-4">
                    <div class="mr-3 relative">
                        <div>
                            <button id="notif" class="relative p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:shadow-outline " aria-label="Notifications">
                              <!--  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>-->
              <!--<div class="bg-red-800 text-gray-50 absolute top-0 right-0 rounded-full w-4 h-4 text-xs font-semibold flex justify-center items-center">
                  <a class="block">8</a>
              </div>-->
            </button>
                        </div>

                        <div id="notif_drop" class="closed hidden absolute origin-top-right z-30 right-0 mt-2 w-72 rounded-md shadow-lg">
                            <div class="py-2 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                               <!-- <div class="uppercase text-gray-600 py-2 px-4 border-b-2 font-bold">Notifications</div>

                                <div class="max-h-80 overflow-y-auto">
                                   
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                    <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">
                                        <div class="text-sm font-semibold truncate">
                                            Please check your email
                                        </div>
                                        <p class="text-xs font-extralight truncate">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam animi rerum consequuntur provident illum? Tempora corrupti blanditiis omnis dolor tenetur et enim mollitia voluptate id recusandae, eum voluptas, incidunt consequuntur!
                                        </p>

                                    </a>
                                </div>-->
                            </div>
                        </div>
                    </div>

                    <!-- Profile dropdown -->

                    <div class="ml-3 relative">
                        <div>
                            <button class="relative max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline" id="profile-menu" aria-label="User menu" aria-haspopup="true">
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </button>
                        </div>

                        <div id="dropdown" class="closed absolute origin-top-right hidden z-30 right-0 mt-2 w-48 rounded-md shadow-lg">
                            <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                                <a href="{{route('admin.testprofile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Your Profile</a>

                                <!--<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Settings</a>-->

                                <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem"  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Sign out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static sidebar for desktop -->
        <div class="flex h-screen -mt-16 overflow-y-auto bg-gray-100">
            <div class="hidden md:flex md:flex-shrink-0 mt-16">
                <div id="sidebar" class="opened flex flex-col w-52 transform duration-200">
                    <div id="sidebar-cont-user" class=" overflow-x-hidden flex flex-col flex-grow border-r border-gray-200 pt-5 pb-4 bg-white overflow-y-auto">
                        <nav class="px-2 bg-white">
                            <div class="space-y-1">

                                <a href="{{route('admin.testusers')}}" class="group users flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 {{ (request()->is('admin/testusers')) ? 'bg-gray-100' : '' }} {{ (request()->is('admin/testusers')) ? 'text-gray-900' : '' }} hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 {{ (request()->is('admin/testusers')) ? 'text-gray-500' : '' }} group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Users</div>
                                </a>

                               <a href="{{route('admin.projects')}}" class="group projects flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 {{ (request()->is('admin/projects')) ? 'bg-gray-100' : '' }} {{ (request()->is('admin/projects')) ? 'text-gray-900' : '' }} hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 {{ (request()->is('admin/projects')) ? 'text-gray-500' : '' }} group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Projects</div>
                                </a>

                                 <a href="{{route('admin.tags')}}" class="group tags flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 {{ (request()->is('admin/tags')) ? 'bg-gray-100' : '' }} {{ (request()->is('admin/tags')) ? 'text-gray-900' : '' }} hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 {{ (request()->is('admin/tags')) ? 'text-gray-500' : '' }} group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Tags</div>
                                </a>

                                <a href="{{route('admin.test')}}" class="group task_tracker   flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md {{ (request()->is('admin/test')) ? 'bg-gray-100' : '' }} {{ (request()->is('admin/test')) ? 'text-gray-900' : '' }}  hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 {{ (request()->is('admin/test')) ? 'text-gray-500' : '' }} group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" /></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Task Tracker</div>
                                </a>

                                <a href="{{route('admin.attendance')}}" class="group attendance flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md {{ (request()->is('admin/attendance')) ? 'bg-gray-100' : '' }} {{ (request()->is('admin/attendance')) ? 'text-gray-900' : '' }} hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 {{ (request()->is('admin/attendance')) ? 'text-gray-500' : '' }} group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Attendance</div>
                                </a>

                                <!--<a href="#" class="group daily_time_sheet flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Daily time-sheet</div>
                                </a>
                                <a href="#" class="group settings flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Settings</div>
                                </a>-->

                            </div>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-0 flex-1 overflow-hidden mt-16">
                <main id="main" class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">

                        @yield('content')

                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script2.js') }}"></script>
</body>

</html>