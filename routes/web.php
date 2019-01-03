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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'PagesController@index',
    'as'   => 'main'
]);

Route::get('/about', [
    'uses' => 'PagesController@about',
    'as'   => 'main'
]);

Route::get('/contact', [
    'uses' => 'PagesController@contact',
    'as'   => 'main'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/users', 'UsersController',['as'=>'backend']);
Route::resource('/doctors', 'DoctorsController',['as'=>'backend']);
Route::resource('/patients', 'PatientsController',['as'=>'backend']);
Route::resource('/events', 'EventController',['as'=>'backend']);

