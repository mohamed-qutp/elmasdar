<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\VacationReqController;
use App\Http\Controllers\PermissionReqController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AttendanceFileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
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

Route::get('/', [LoginController::class, 'showLoginForm'])->name('index');
Route::get('/Register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/Register', [RegisterController::class, 'create'])->name('register');

Route::get('/laravel',[RoutesController::class, 'laravel'])->name('laravel');

// user controller - create routes
Route::resource('/users','\App\Http\Controllers\UserController');
Route::get('change-pass/{id}',[UserController::class, 'changePassView'])->name('change-pass');
Route::put('change-pass/{id}',[UserController::class, 'changePass'])->name('change-password');

// client controller
Route::resource('/clients','\App\Http\Controllers\ClientController');
//department controller
Route::resource('/departments','\App\Http\Controllers\DepartmentController');
Route::get('/client_project/{id}',[ClientController::class, 'projects'])->name('client_project');
// Route::get('/client-search',[ClientController::class, 'search']);
// Route::post('/client-search',[ClientController::class, 'search'])->name('client.search');

//login controller
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// attendance routes
Route::resource('/att-file','\App\Http\Controllers\AttendanceFileController');
Route::get('/att-file-download/{id}', [AttendanceFileController::class, 'fileDownload'])->name('fileDownload');
Route::get('/user-att-file', [AttendanceFileController::class, 'index2'])->name('att-file.index2');

// projects controller
Route::resource('/projects','\App\Http\Controllers\ProjectsController');
 
// tasks controller
Route::get('/user_tasks/{id}',[TaskController::class, 'index'])->name('user_tasks');
Route::get('/user_tasks_show/{id}',[TaskController::class, 'showTaskDetails'])->name('user_tasks_show');
Route::get('/own_tasks',[TaskController::class, 'authTasks'])->name('own_tasks');
Route::post('/own_tasks',[TaskController::class, 'store'])->name('task.store');
Route::put('/user_tasks_show/{id}',[TaskController::class, 'statusUpdate'])->name('task.status');

// contract controller
Route::resource('/contract','\App\Http\Controllers\ContractController');
 
// vacations and permissions Requests controllers
Route::resource('/vrequest','\App\Http\Controllers\VacationReqController');
Route::get('/substitute-employee-vrequest',[VacationReqController::class, 'substitute_index'])->name('vrequest.substitute_index');
Route::get('/admin-vrequest',[VacationReqController::class, 'index2'])->name('vrequest.index2');
Route::get('/admin-past-vrequest',[VacationReqController::class, 'index3'])->name('vrequest.index3');
Route::put('/substitute-employee-vrequest/{vrequest}',[VacationReqController::class, 'update1'])->name('vrequest.update1');
Route::put('/admin-vrequest/{vrequest}',[VacationReqController::class, 'update2'])->name('vrequest.update2');
Route::get('/vrequest-search',[VacationReqController::class, 'search']);
Route::post('/vrequest-search',[VacationReqController::class, 'search'])->name('vrequest.search');

Route::resource('/prequest','\App\Http\Controllers\PermissionReqController');
Route::get('/admin-prequest',[PermissionReqController::class, 'index2'])->name('prequest.index2');
Route::get('/admin-past-prequest',[PermissionReqController::class, 'index3'])->name('prequest.index3');
Route::put('/admin-prequest/{id}',[PermissionReqController::class, 'update2'])->name('prequest.update2');
Route::get('/prequest-search',[PermissionReqController::class, 'index3']);
Route::post('/prequest-search',[PermissionReqController::class, 'search'])->name('prequest.search');

// comments controller
Route::post('/comments/{id}',[CommentsController::class, 'store'])->name('comments.store');
Route::delete('/comments/{id}',[CommentsController::class, 'delete'])->name('comments.delete');