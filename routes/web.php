<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/password/emailconf/{token}', [App\Http\Controllers\AdminController::class,'showConfForm']);
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin/newuser', [App\Http\Controllers\AdminController::class, 'newuser'])->name('newuser');
Route::post('/admin/newuser', [App\Http\Controllers\AdminController::class, 'adregister'])->name('adregister');
Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('users');
Route::get('/admin/{id}/delete', [App\Http\Controllers\AdminController::class, 'delete']);
Route::get('/admin/user/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('userdel');
Route::get('/admin/{id}/suspend', [App\Http\Controllers\AdminController::class, 'suspend']);
Route::get('/admin/{id}/open', [App\Http\Controllers\AdminController::class, 'open']);
Route::get('/admin/{id}/edit', [App\Http\Controllers\AdminController::class, 'edit']);
Route::POST('/admin/edituser', [App\Http\Controllers\AdminController::class, 'edituser'])->name('edituser');
Route::get('/admin/{id}/resend', [App\Http\Controllers\AdminController::class, 'resend']);
Route::POST('/admin/confuser', [App\Http\Controllers\AdminController::class,' reset'])->name('confuser');
Route::get('/password/emailconf/{token}', [App\Http\Controllers\AdminController::class,'showConfForm']);
Route::POST('/reset_password_with_token', [App\Http\Controllers\AdminController::class,'resetPassword']);
Route::POST('/user/createtask', [App\Http\Controllers\TasksController::class, 'store'])->name('createtask');
Route::get('/user/changepass', [App\Http\Controllers\UserController::class, 'changepass'])->name('userpass');
Route::POST('user/changep', [App\Http\Controllers\UserController::class, 'changep'])->name('changep');
Route::get('/user/changejob', [App\Http\Controllers\UserController::class, 'changejob'])->name('userjob');
Route::POST('/user/changej', [App\Http\Controllers\UserController::class, 'changej'])->name('changej');
Route::get('/user/{id}/edit', [App\Http\Controllers\TasksController::class, 'edit'])->name('edittask');
//new routes for frontend
//for user:
Route::get('/user/newindex', [App\Http\Controllers\UserController::class, 'newindex'])->name('user.newindex');
Route::get('/user/chdate/{date}', [App\Http\Controllers\UserController::class, 'chdate']);
Route::POST('/user/createt', [App\Http\Controllers\TasksController::class, 'st'])->name('createt');
Route::get('/user/newprofile', [App\Http\Controllers\UserController::class, 'newprofile'])->name('user.newprofile');
Route::get('/user/{id}/taskdel', [App\Http\Controllers\TasksController::class, 'taskdel']);
Route::get('/user/{id}/taskend', [App\Http\Controllers\TasksController::class, 'taskend']);
Route::get('/user/tags', [App\Http\Controllers\TagsController::class, 'indexuser'])->name('user.tags');
Route::get('/user/{id}/tags', [App\Http\Controllers\TagsController::class, 'tagshowuser']);
Route::get('/user/projects', [App\Http\Controllers\ProjectsController::class, 'indexuser'])->name('user.projects');
Route::get('/user/{id}/projects', [App\Http\Controllers\ProjectsController::class, 'projectshowuser']);
//for admin: 
Route::get('/admin/newindex', [App\Http\Controllers\AdminController::class, 'newindex']);
//test
Route::get('/admin/test', [App\Http\Controllers\AdminController::class, 'test'])->name('admin.test');
Route::get('/admin/testusers', [App\Http\Controllers\AdminController::class, 'testusers'])->name('admin.testusers');
Route::get('/admin/testusus', [App\Http\Controllers\AdminController::class, 'testusus'])->name('admin.testusus');
Route::get('/admin/testuinv', [App\Http\Controllers\AdminController::class, 'testuinv'])->name('admin.testuinv');
Route::get('/admin/testuad', [App\Http\Controllers\AdminController::class, 'testuad'])->name('admin.testuad');
Route::get('/admin/{id}/testudel', [App\Http\Controllers\AdminController::class, 'testudel'])->name('admin.testudel');
Route::get('/admin/testprofile', [App\Http\Controllers\AdminController::class, 'testprofile'])->name('admin.testprofile');
Route::POST('/admin/testchangep', [App\Http\Controllers\AdminController::class, 'testchangep'])->name('admin.testchangep');
Route::POST('/admin/testaddcom', [App\Http\Controllers\AdminController::class, 'testaddcom'])->name('admin.testaddcom');
Route::get('/admin/testprojects', [App\Http\Controllers\AdminController::class, 'testprojects'])->name('admin.testprojects');
Route::get('/admin/latesttest', [App\Http\Controllers\AdminController::class, 'latesttest'])->name('admin.latesttest');
Route::get('/admin/tags', [App\Http\Controllers\TagsController::class, 'indexadmin'])->name('admin.tags');
Route::get('/admin/{id}/tags', [App\Http\Controllers\TagsController::class, 'tagshowadmin']);
Route::get('/admin/projects', [App\Http\Controllers\ProjectsController::class, 'indexadmin'])->name('admin.projects');
Route::get('/admin/{id}/projects', [App\Http\Controllers\ProjectsController::class, 'projectshowadmin']);
Route::get('/admin/chdate/{date}', [App\Http\Controllers\AdminController::class, 'chdate']);
Route::get('/admin/attendance', [App\Http\Controllers\AdminController::class, 'attendance'])->name('admin.attendance');
});



