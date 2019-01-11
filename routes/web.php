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
Route::get('/doctors', ['as' => 'doctor', 'uses' => 'DoctorsController@index']);
Route::get('/dentists', ['as' => 'dentist', 'uses' => 'DoctorsController@dentists']);
Route::resource('/patients', 'PatientsController',['as'=>'backend']);
Route::resource('/prescriptions', 'PrescriptionsController',['as'=>'backend']);
Route::resource('/roles', 'RolesController',['as'=>'backend']);


Route::resource('/appointments', 'AppointmentsController',['as'=>'backend']);
Route::resource('/services', 'ServicesController',['as'=>'backend']);
Route::resource('/employees', 'EmployeesController',['as'=>'backend']);

Route::get('event/add','EventController@createEvent');
Route::post('event/add','EventController@store');
Route::get('event','EventController@calender');


  Route::post('appointments_ajax_update',
   ['uses' => 'AppointmentsController@ajaxUpdate', 'as' => 'appointments.ajax_update']);