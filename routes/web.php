<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\AttendancesController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login/store','LoginController@login_store')->name('login_store');
Auth::routes();
Route::get('/login','LoginController@login')->name('login');
Route::get('/logout','LoginController@logout')->name('logout');
Route::group(['middleware' => ['auth','admin']], function () {
Route::get('/dashboard','DashboardController@index')->name('dashboard');



Route::get('/users','UsersController@index')->name('users.all');
Route::get('/users/create','UsersController@create')->name('users.create');
Route::post('/users/store','UsersController@store')->name('users.store');

Route::get('/subjects/create','SubjectsController@create')->name('subject.create');
Route::get('/subjects','SubjectsController@index')->name('subjects.all');
Route::post('/subjects/store','SubjectsController@store')->name('subjects.store');
Route::get('/classes','ClassesController@index')->name('classes.all');
Route::get('/classes/create','ClassesController@create')->name('class.create');
Route::post('/classes/store','ClassesController@store')->name('classes.store');
});
Route::group(['middleware' => ['auth','teacher']], function () {
Route::get('/teachers','TeachersController@index')->name('teachers.all');
});
Route::group(['middleware' => ['auth','student']], function () {
Route::get('/students','StudentsController@index')->name('students.all');

});


Route::get('/attendances','AttendancesController@index');
Route::get('/attendances/create','AttendancesController@create');


