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

Route::get('/', 'LoginController@loginpage');
Route::get('/login', 'LoginController@loginpage')->name('login');
Route::get('/dashboard','LoginController@dashboardpage')->name('dashboard')->middleware('auth');
Route::post('login-check', 'LoginController@loginCheck')->name('login.check');
Route::get('/logout','LoginController@logout')->name('logout');


Route::get('register','EmployeeRegisterController@create')->name('register.page');
Route::post('company/register','EmployeeRegisterController@store')->name('employee.register');

Route::group([
  'middleware' => 'auth',
],
    function ()
    {
        Route::resource('employee', 'EmployeeController');
        Route::resource('kitchen_staff', 'KitchenStaffController');
        Route::resource('food', 'FoodController');
    }
);


