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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'TemplateController@index')->name('/');

Route::get('/login','LoginController@index')->name('authlogin');

Route::post('/login','LoginController@userAuthentication')->name('auth.login');

Route::get('/logout', 'LoginController@logout')->name('auth.logout');

Route::get('/register','RegisterController@index')->name('authregister');

Route::post('/store_register','RegisterController@store')->name('storeregister');

Route::post('/sendemail/send','SendEmailController@send')->name('emailtest');



+Route::group(['prefix'=> 'admindashboard','namespace'=>'backend', 'middleware' =>'IsAdmin'], function(){
    Route::get('/','AdminController@index')->name('admin.dashboard');

    Route::resource('/township','TownshipController');

    Route::resource('/complain_place','ComplainPlaceController');

    Route::resource('/user','UserController');

    Route::get('/solved_complain','ComplainListController@solved_complain')->name('solved_complain');

    Route::get('/new_complain','ComplainListController@new_complain')->name('new_complain');

    Route::get('/rejected_complain','ComplainListController@rejected_complain')->name('rejected_complain');

    Route::get('/all_complain','ComplainListController@all_complain')->name('all_complain');

    Route::get('/view_detail_complain/{id}','ComplainListController@view_detail_complain')->name('view_detail_complain');

    Route::get('/all_view_detail_complain/{id}','ComplainListController@all_view_detail_complain')->name('all_view_detail_complain');
    
    Route::get('/delete_complain/{id}','ComplainListController@delete_complain')->name('delete_complain');

    Route::get('/edit_new_complain/{id}','ComplainListController@edit_new_complain')->name('edit_new_complain');

    Route::post('/update_new_complain/{id}','ComplainListController@update_new_complain')->name('update_new_complain');

    Route::resource('/quarter_village','QuarterVillageController');

    Route::resource('/adminprofile','AdminProfileController');

    Route::resource('/status','StatusController');

  
});


Route::group(['prefix'=> 'user','namespace'=>'frontend', 'middleware' =>'IsUser'], function(){

    Route::get('/','UserController@index')->name('user.dashboard');

    Route::post('/apply_complain','ApplyComplainController@get_data');

    Route::resource('/request_complain','ApplyComplainController');

    Route::get('/accept_complain','ApplyComplainController@accept_complain')->name('accept_complain');

    Route::get('/reject_complain','ApplyComplainController@reject_complain')->name('reject_complain');


    Route::resource('/profile','ProfileController');
   
});





