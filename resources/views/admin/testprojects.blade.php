<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIMESHIFT</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
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
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
              <div class="bg-red-800 text-gray-50 absolute top-0 right-0 rounded-full w-4 h-4 text-xs font-semibold flex justify-center items-center">
                  <a class="block">8</a>
              </div>
            </button>
                        </div>

                        <div id="notif_drop" class="closed hidden absolute origin-top-right z-30 right-0 mt-2 w-72 rounded-md shadow-lg">
                            <div class="py-2 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

                                <div class="uppercase text-gray-600 py-2 px-4 border-b-2 font-bold">Notifications</div>

                                <div class="max-h-80 overflow-y-auto">
                                    <!-- <div class="text-sm font-semibold text-gray-400 text-center py-8">
                                        No New Notifications
                                    </div> -->
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
                                </div>
                                <!-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Settings</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Sign out</a> -->
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
                                <a href="javascript:toggleprofile()" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Your Profile</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Settings</a>

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150" role="menuitem">Sign out</a>
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
                    <!-- Sidebar component, swap this element with another sidebar if you like -->
                    <div id="sidebar-cont-user" class=" overflow-x-hidden flex flex-col flex-grow border-r border-gray-200 pt-5 pb-4 bg-white overflow-y-auto">
                        <nav class="px-2 bg-white">
                            <div class="space-y-1">
                                <!-- <a href="#" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    Heroicon name: home
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-600 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                                      </svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Dashboard</div>
                                </a> -->
                                <a href="#" class="group users flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: user-group -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Users</div>
                                </a>
                                <!-- <a href="#" class="group invite_users flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    Heroicon name: user-add
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Invite Users</div>
                                </a> -->
                                <a href="#" class="group projects flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: collection -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Projects</div>
                                </a>
                                <a href="#" class="group tags flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: tag -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Tags</div>
                                </a>
                                <a href="#" class="group task_tracker active_menulabel flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-900 rounded-md bg-gray-100 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150">
                                    <!-- Heroicon name: folder -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-500 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                      </svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Task Tracker</div>
                                </a>
                                <a href="#" class="group attendance flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: users -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Attendance</div>
                                </a>
                                <!-- <a href="#" class="group flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150"> -->
                                <!-- Heroicon name: calendar -->
                                <!-- <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg> Overtime
                                </a> -->
                                <a href="#" class="group daily_time_sheet flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: inbox -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Daily time-sheet</div>
                                </a>
                                <a href="#" class="group settings flex items-center px-2 py-2 text-sm leading-5 font-medium text-gray-600 rounded-md hover:text-gray-900 hover:bg-gray-50 focus:outline-none focus:text-gray-900 focus:bg-gray-50 transition ease-in-out duration-150">
                                    <!-- Heroicon name: cog -->
                                    <svg class="mr-6 h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    <div class="menulabel whitespace-nowrap uppercase">Settings</div>
                                </a>

                            </div>

                        </nav>
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-0 flex-1 overflow-hidden mt-16">
                <main id="main" class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">

                    <!-- ////////////////////////////////////////////////////// Users ////////////////////////////////////////////////////////// -->
                    <div id="users_content" class="align-middle w-full sm:px-6 hidden py-6">
                        <div class="flex justify-between pb-4">
                            <div class="flex">
                                <select class="focus:outline-none py-1 px-2 bg-gray-50 border border-gray-400 text-sm rounded-md" name="filter" id="filter_users">
                                    <option value="all">Show All</option>
                                    <option value="all">Suspended</option>
                                    <option value="all">Invited</option>
                                    <option value="all">Admin</option>
                                </select>
                                <input class="focus:outline-none bg-gray-50 py-1 px-2 mx-2 text-sm border border-gray-400 rounded-md" type="text" placeholder="Search by email">
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
                                <!-- Odd row -->
                                <div class="bg-white grid grid-cols-6 gap-x-3 px-6">
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        Administrator
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        administrator@app.com
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        Admin
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        2021-03-29 09:01:52
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button value="action1" class="w-6 h-6 focus:outline-none users_actions">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>    
                                                </button>
                                        </div>
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button class="w-6 h-6 focus:outline-none">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 grid grid-cols-6 gap-x-3 px-6">
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        User
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        user@app.com
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        User
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        2021-03-29 09:01:52
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button value="action2" class="w-6 h-6 focus:outline-none users_actions relative">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>    
                                                </button>
                                        </div>
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button class="w-6 h-6 focus:outline-none">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white grid grid-cols-6 gap-x-3 px-6">
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        fadi yared
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        fadi-yared@live.com
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        User
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        2021-03-31 21:03:20
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button value="action3" class="w-6 h-6 focus:outline-none users_actions relative">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>    
                                                </button>
                                        </div>
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button class="w-6 h-6 focus:outline-none">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 grid grid-cols-6 gap-x-3 px-6 rounded-b-md">
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        expert
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        expert@app.com
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        User
                                    </div>
                                    <div class="py-2 text-left text-sm leading-5 text-gray-500">
                                        2021-04-2 09:34:01
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button value="action4" class="w-6 h-6 focus:outline-none users_actions relative">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>    
                                                </button>
                                        </div>
                                    </div>
                                    <div class="py-2 text-center">
                                        <div class="relative inline">
                                            <button class="w-6 h-6 focus:outline-none">
                                                    <svg class="w-full h-full text-gray-500 hover:text-gray-800" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM7 8a1 1 0 012 0v4a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v4a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ////////////////////////////////////////////////////// Users ////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////// Invite Users ////////////////////////////////////////////////////////// -->
                    <!-- <div id="invite_users_content" class="align-middle w-full sm:px-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Invite Users
                        </div>

                    </div> -->
                    <!-- ////////////////////////////////////////////////////// Invite Users ////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////// Projects ////////////////////////////////////////////////////////// -->
                    <div id="projects_content" class="align-middle w-full sm:p-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Projects
                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Projects ////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////// Tags ////////////////////////////////////////////////////////// -->
                    <div id="tags_content" class="align-middle w-full sm:p-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Tags
                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Tags ////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////// Task Tracker ////////////////////////////////////////////////////////// -->
                    <div id="task_tracker_content" class="active_tab py-6 align-middle inline-block w-full sm:px-6">

                        <!-- ////////////////////////////////////////////// top part //////////////////////////////////////////// -->
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

                                <div class="p-3 flex items-center justify-center text-xs leading-4 font-medium text-gray-500 col-span-2">
                                    Start - End
                                </div>
                                <div class=""></div>
                                <div class=""></div>

                            </div>

                            <!-- Odd row -->
                            <div class="grid custom-grid bg-white sm:rounded-b-lg">
                                <div class="px-3 py-2">
                                    <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Current Task ">
                                </div>
                                <div class="px-3 py-2">
                                    <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm " placeholder="Project Name">
                                </div>
                                <div class="px-3 py-2">
                                    <select name="" id="" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm">
                                        <option value="">RT</option>
                                        <option value="">AT</option>
                                    </select>
                                    <!-- <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm"> -->
                                </div>
                                <div class="px-3 py-2">
                                    <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Specify Tags">
                                </div>
                                <div class="px-3 py-2">
                                    <input type="text" class="border border-1 w-full outline-none px-0.5 text-gray-500 text-sm rounded-sm" placeholder="Short Desc.">
                                </div>

                                <div class="px-3 py-2 text-center text-sm leading-5 text-gray-500"></div>
                                <div class="px-3 py-2 flex items-center justify-center col-span-2">
                                    <input type="time" class="outline-none px-0.5 text-gray-500 text-sm border border-1 mx-0.5 rounded-sm">-<input type="time" class="outline-none px-0.5 text-gray-500 text-sm border border-1 mx-0.5 rounded-sm">
                                </div>
                                <div class="px-6 py-2 flex items-center text-sm leading-5 font-medium text-gray-500">
                                    00:00:00
                                </div>
                                <div class="px-3 py-2 text-center text-sm leading-5 text-gray-500">
                                    <button class="px-2 py-1 font-semibold bg-gray-500 text-white rounded-md hover:bg-gray-600 focus:outline-none">
                                                Save
                                            </button>
                                </div>
                            </div>



                        </div>
                        <!-- ////////////////////////////////////////////// top part //////////////////////////////////////////// -->
                        <div id="table1" class="shadow border-b border-gray-200 sm:rounded-lg mb-10 divide-y divide-gray-200">


                            <div class="grid custom-grid bg-gray-50 sm:rounded-t-lg">

                                <div class="col-span-2 p-3 whitespace-no-wrap text-left text-xs leading-4 font-medium text-gray-500">
                                    Today - March 09, 2021
                                </div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>


                                <div class="col-span-2 p-3 text-center text-xs leading-4 font-medium text-gray-500">
                                    08:00 - 20:00
                                </div>
                                <div class="col-span-2 px-6 py-3 text-left text-xs leading-4 font-medium text-gray-500 italic">
                                    Total hours: 06:25:42
                                </div>


                            </div>

                            <!-- Odd row -->

                            <div class="grid custom-grid bg-white">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-gray-100">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-white">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-gray-100">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-white">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-gray-100">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-white">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="grid custom-grid bg-gray-100 sm:rounded-b-lg">
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    Task API - CRUD
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 font-semibold italic text-gray-500 flex items-center">
                                    Timeshift Project
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center">
                                    RT
                                </div>
                                <div class="p-3 text-gray-500  flex items-center">
                                    <div class="flex items-center flex-wrap">
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">API</a>
                                        <a href="#" class="text-sm px-2 m-0.5 border border-1 border-gray-200 rounded-lg">database</a>
                                    </div>
                                </div>
                                <div class="px-3 py-2 text-sm leading-5 text-left text-gray-500  flex items-center">
                                    Developing the CRUD API
                                </div>
                                <div class="px-3 py-2 text-left text-sm leading-5 text-gray-500 flex items-center -mr-12">
                                    Please prioritize
                                </div>
                                <div class="col-span-2 px-6 py-4 text-xs leading-5 text-gray-500 flex items-center justify-center">
                                    08:00 - 09:30
                                </div>
                                <div class="px-6 py-2 truncate text-left flex items-center text-sm leading-5 font-medium text-gray-500">
                                    01:30:00
                                </div>
                                <div class="px-6 flex items-center justify-center">

                                    <div class="flex items-center justify-around w-full">
                                        <div class="relative flex flex-col">
                                            <button class="focus:outline-none comment_butt">
                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                    </button>

                                        </div>


                                        <div class="relative flex flex-col">


                                            <button class="focus:outline-none more_butt">
                                                                        <svg class="w-6 h-6 text-gray-500 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> 
                                                                    </button>


                                        </div>



                                    </div>
                                </div>
                            </div>





                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Task Tracker ////////////////////////////////////////////////////////// -->



                    <!-- ////////////////////////////////////////////////////// Attendance ////////////////////////////////////////////////////////// -->
                    <div id="attendance_content" class="align-middle w-full sm:p-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Attendance
                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Attendance ////////////////////////////////////////////////////////// -->



                    <!-- ////////////////////////////////////////////////////// Daily time-sheet ////////////////////////////////////////////////////////// -->
                    <div id="daily_time_sheet_content" class="align-middle w-full sm:p-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Daily time-sheet
                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Daily time-sheet ////////////////////////////////////////////////////////// -->

                    <!-- ////////////////////////////////////////////////////// Settings ////////////////////////////////////////////////////////// -->
                    <div id="settings_content" class="align-middle w-full sm:p-6 lg:px-8 hidden">
                        <div class="text-3xl font-bold text-gray-700">
                            Settings
                        </div>

                    </div>
                    <!-- ////////////////////////////////////////////////////// Settings ////////////////////////////////////////////////////////// -->

                    <!-- /////////////////////////////////////////// delete popup /////////////////////////////////////////// -->
                    <div id="del_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
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
                                                Are you sure you want to delete the user: <b> User </b>?
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 sm:mt-4 sm:ml-10 sm:pl-4 sm:flex">
                                    <span class="flex w-full rounded-md shadow-sm sm:w-auto">
            <button type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red transition ease-in-out duration-150 sm:text-sm sm:leading-5">
              Delete
            </button>
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

                            <form class="w-1/4 mx-auto bg-white p-5 rounded-lg">
                                <div>
                                    <div class="pt-2">
                                        <div>
                                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                                Edit user
                                            </h3>
                                            <input class="actionEdit" value="" type="hidden">
                                        </div>
                                        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                                            <div class="sm:col-span-6">
                                                <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                                  Name
                                </label>
                                                <div class="mt-1">
                                                    <input required id="name" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                                  Email address
                                </label>
                                                <div class="mt-1 rounded-md shadow-sm">
                                                    <input required id="email" type="email" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                </div>
                                            </div>


                                            <div class="sm:col-span-6">
                                                <label for="street_address" class="block text-sm font-medium leading-5 text-gray-700">
                                  Job
                                </label>
                                                <div class="mt-1 rounded-md shadow-sm">
                                                    <input required id="street_address" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                                </div>
                                            </div>

                                            <div class="sm:col-span-6">
                                                <label for="city" class="block text-sm font-medium leading-5 text-gray-700">
                                  Password
                                </label>
                                                <div class="mt-1 rounded-md shadow-sm">
                                                    <input required type="password" id="city" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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

                    <!-- /////////////////////////////////////////// Invite popup /////////////////////////////////////////// -->
                    <div id="invite_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                        <div class="flex items-center justify-center min-h-screen px-4 sm:p-0 bg-gray-500 bg-opacity-75">

                            <form class="w-1/4 mx-auto bg-white p-5 rounded-lg">
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
                                                    <input required id="email" type="email" class="form-input border border-gray-400 rounded-md py-1 px-2 focus:outline-none text-gray-700 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
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
                    <!-- /////////////////////////////////////////// Invite popup /////////////////////////////////////////// -->

                    <!-- /////////////////////////////////////////// Profile popup /////////////////////////////////////////// -->
                    <div id="profile_popup" class="fixed z-10 inset-0 overflow-y-auto hidden">
                        <div class="flex items-center justify-center min-h-screen px-4 sm:p-0 bg-gray-500 bg-opacity-75">
                            <div class="w-1/2 mx-auto">
                                <form action="#" method="POST">
                                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                                        <div class="bg-white py-6 px-4 space-y-6 sm:p-6">
                                            <div class="flex justify-between">
                                                <h2 class="text-lg leading-6 font-medium text-gray-900">Profile</h2>
                                                <button type="button" class="focus:outline-none text-gray-700" onclick="toggleprofile()">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
                                                </button>
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
                                                        <span class="ml-5 rounded-md shadow-sm">
                                    <button type="button" class="border border-gray-300 rounded-md py-2 px-3 text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                                      Change
                                    </button>
                                  </span>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Username</label>
                                                        <input id="first_name" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" value="User"
                                                        />
                                                    </div>
                                                </div>
                                            </div>


                                            <div>
                                                <h2 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h2>
                                            </div>

                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                                                    <input id="first_name" required value="First" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    />
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="last_name" class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                                                    <input id="last_name" required value="User" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    />
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="mail_profile" class="block text-sm font-medium leading-5 text-gray-700">Email</label>
                                                    <input id="mail_profile" type="email" required value="user@mail.com" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    />
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="phone_profile" class="block text-sm font-medium leading-5 text-gray-700">Phone</label>
                                                    <input id="phone_profile" type="tel" required value="03123123" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    />
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="password" class="block text-sm font-medium leading-5 text-gray-700">Password</label>
                                                    <input id="password" type="password" required value="User123@" class="form-input mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                                    />
                                                </div>


                                            </div>



                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 flex justify-between items-center sm:px-6">
                                            <span class="italic text-sm font-semibold text-gray-500">Joined: 2021-04-05 12:24:49</span>
                                            <button type="submit" class="bg-gray-600 border border-transparent rounded-md py-2 px-4 inline-flex justify-center text-sm leading-5 font-medium text-white hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                    Save
                                  </button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- /////////////////////////////////////////// Profile popup /////////////////////////////////////////// -->





                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/script2.js') }}"></script>
</body>

</html>