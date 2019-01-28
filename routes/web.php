<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RoutepermissionProvider within a group which
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


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

Route::get('/doctors', ['as' => 'doctor', 'uses' => 'DoctorsController@index']);
Route::get('/dentists', ['as' => 'dentist', 'uses' => 'DoctorsController@dentists']);
Route::resource('/patients', 'PatientsController',['as'=>'backend']);
Route::resource('/prescriptions', 'PrescriptionsController',['as'=>'backend']);
Route::resource('/roles', 'RolesController',['as'=>'backend']);
Route::resource('/permissions', 'permissionsController',['as'=>'backend']);
Route::resource('/employees', 'EmployeesController',['as'=>'backend']);
Route::resource('/appointments', 'AppointmentsController',['as'=>'backend']);
Route::resource('/events', 'EventController',['as'=>'backend']);
Route::resource('/slots', 'TimeslotController',['as'=>'backend']);
Route::resource('/users', 'UsersController',['as'=>'backend']);
Route::resource('/account', 'AccountController',['as'=>'backend']);
Route::resource('/dental', 'DentalController',['as'=>'backend']);

Route::put('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::get('/profile/{user}/edit', [
        'uses' => 'ProfileController@edit',
        'as'   => 'profile-edit'
    ]);

    Route::get('/records/{id}', [
        'uses' => 'RecordsController@details',
        'as'   => 'records'
    ]);

});

Route::get('/doctor', [
    'uses' => 'PagesController@doctor',
    'as'   => 'main'
]);
Route::resource('/bookings', 'BookAppointmentController',['as'=>'backend']);
//
//Route::get('/notice', [
//    'uses' => 'BookAppointmentController@store',
//]);

Route::post('/destroy','UserController@destroy');