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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', function () {
    return view('login/loginForm');
});

Route::get('/index', function() {
    return view('index/index');
});

Route::get('/appointment', function() {
    return view('Appointment/appointment');
});



Route::get('/aptmntread', 'App\Http\Controllers\AppointmentController@aptmntread');
Route::get('/aptmntcreate', 'App\Http\Controllers\AppointmentController@aptcreate');
Route::post('/aptmntadd', 'App\Http\Controllers\AppointmentController@aptmntadd')->name('/aptmntadd');
Route::get('/aptmntdelete/{id}', 'App\Http\Controllers\AppointmentController@aptmntdelete');
Route::get('/aptmntupdate/{id}', 'App\Http\Controllers\AppointmentController@aptmntupdate');
Route::post('/aptmntedit/{id}', 'App\Http\Controllers\AppointmentController@aptmntedit')->name('/aptmntedit');

Route::get('/doctread', 'App\Http\Controllers\DoctorController@doctread');
Route::get('/doctdelete/{id}', 'App\Http\Controllers\DoctorController@doctdelete');
Route::get('/doctupdate/{id}', 'App\Http\Controllers\DoctorController@doctupdate');
Route::post('/doctedit/{id}', 'App\Http\Controllers\DoctorController@doctedit')->name('/doctedit');
Route::get('/doctcreate', 'App\Http\Controllers\DoctorController@doctcreate');
Route::post('/doctadd', 'App\Http\Controllers\DoctorController@doctadd')->name('/doctadd');

Route::get('/pread', 'App\Http\Controllers\PatientController@pread');
Route::get('/pcreate', 'App\Http\Controllers\PatientController@pcreate');
Route::post('/padd', 'App\Http\Controllers\PatientController@padd')->name('/padd');
Route::get('/pdelete/{id}', 'App\Http\Controllers\PatientController@pdelete');
Route::get('/pupdate/{id}', 'App\Http\Controllers\PatientController@pupdate');
Route::post('/pedit/{id}', 'App\Http\Controllers\PatientController@pedit')->name('/pedit');