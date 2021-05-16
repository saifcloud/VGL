<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
});





Route::get('/',[HomeController::class,'index']);
Route::get('service/{id}',[ServiceController::class,'index']);
Route::get('gallery',[HomeController::class,'gallery']);
Route::get('news',[HomeController::class,'news']);
Route::get('contact',[HomeController::class,'contact']);
Route::post('contact',[HomeController::class,'post_contact']);
Route::get('about',[HomeController::class,'about']);
Route::get('career',[HomeController::class,'career']);
Route::post('callback',[HomeController::class,'callback']);












//protected routes
Route::group(['middleware'=>'web'],function(){});

