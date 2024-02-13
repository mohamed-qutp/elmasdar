<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;

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

// Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
// {

// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('demo-request', [DemoController::class,'demoRequest'])->name('demo-request');
Route::post('sendEmail', [DemoController::class,'sendEmail'])->name('sendEmail');

