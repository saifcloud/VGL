<?php

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

Route::get('/admin','AuthController@index');
Route::post('admin/login','AuthController@create');

//forget password
Route::get('admin/forget-password','AuthController@store');

Route::post('admin/forget-password','AuthController@show');

//protected routes
Route::group(['prefix'=>'admin','middleware' => ['admin']],function() {

Route::get('dashboard', 'AdminController@index');


//service
Route::get('services','ServiceController@index');

Route::get('service/create','ServiceController@create');
Route::post('service/store','ServiceController@store');

Route::get('service/show/{id}','ServiceController@show');

Route::get('service/edit/{id}','ServiceController@edit');
Route::post('service/update','ServiceController@update');

Route::get('service/delete/{od}','ServiceController@destroy');


//projects
Route::get('projects','ProjectController@index');

Route::get('project/create','ProjectController@create');
Route::post('project/store','ProjectController@store');

Route::get('project/show/{id}','ProjectController@show');

Route::get('project/edit/{id}','ProjectController@edit');
Route::post('project/update','ProjectController@update');

Route::get('project/delete/{od}','ProjectController@destroy');




//brands
Route::get('brands','BrandController@index');

Route::get('brand/create','BrandController@create');
Route::post('brand/store','BrandController@store');

Route::get('brand/show/{id}','BrandController@show');

Route::get('brand/edit/{id}','BrandController@edit');
Route::post('brand/update','BrandController@update');

Route::get('brand/delete/{od}','BrandController@destroy');



//news
Route::get('news','NewsController@index');

Route::get('news/create','NewsController@create');
Route::post('news/store','NewsController@store');

Route::get('news/show/{id}','NewsController@show');

Route::get('news/edit/{id}','NewsController@edit');
Route::post('news/update','NewsController@update');

Route::get('news/delete/{od}','NewsController@destroy');




//testimonials
Route::get('testimonials','TestimonialController@index');

Route::get('testimonial/create','TestimonialController@create');
Route::post('testimonial/store','TestimonialController@store');

Route::get('testimonial/show/{id}','TestimonialController@show');

Route::get('testimonial/edit/{id}','TestimonialController@edit');
Route::post('testimonial/update','TestimonialController@update');

Route::get('testimonial/delete/{od}','TestimonialController@destroy');


//contact
Route::get('contacts','ContactController@index');

Route::get('contact/create','ContactController@create');
Route::post('contact/store','ContactController@store');

Route::get('contact/show/{id}','ContactController@show');

Route::get('contact/edit/{id}','ContactController@edit');
Route::post('contact/update','ContactController@update');

Route::get('contact/delete/{od}','ContactController@destroy');



//category
Route::get('category','CategoryController@index');

Route::get('category/create','CategoryController@create');
Route::post('category/store','CategoryController@store');

Route::get('category/show/{id}','CategoryController@show');

Route::get('category/edit/{id}','CategoryController@edit');
Route::post('category/update','CategoryController@update');

Route::get('category/delete/{od}','CategoryController@destroy');



Route::get('setting','SettingController@edit');
Route::post('setting','SettingController@update');





//client
Route::get('client','ClientController@index');

Route::get('client/create','ClientController@create');
Route::post('client/store','ClientController@store');

Route::get('client/show/{id}','ClientController@show');

Route::get('client/edit/{id}','ClientController@edit');
Route::post('client/update','ClientController@update');

Route::get('client/delete/{id}','ClientController@destroy');





//profile
Route::get('profile','AdminController@create');
Route::post('profile','AdminController@store');

//change password 
Route::get('change-password','AdminController@change_password');
Route::post('change-password','AdminController@store_change_password');


//logout
Route::get('logout','AdminController@destroy');


});
