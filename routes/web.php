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
Route::post('/password-reset', 'LoginController@passwordReset')->name('pssword.reset');


Route::get('register','EmployeeRegisterController@create')->name('register.page');
Route::post('employee-store','EmployeeRegisterController@store')->name('employee.register');

Route::group([
  'middleware' => 'auth',
],
    function ()
    {
        Route::resource('employee', 'EmployeeController');

        Route::get('employee/activation/{id}','EmployeeController@employeeActivation')->name('employee.activation');


        Route::resource('kitchen_staff', 'KitchenStaffController');
        Route::resource('food', 'FoodController');
        Route::post('food-make','FoodController@makeTodayFood')->name('food.make');
        Route::get('food-today','FoodController@todayFood')->name('food.today');
        Route::post('make-order', 'OrderController@store')->name('make.order');

        Route::get('advance-order', 'OrderController@create')->name('advance.order');
        Route::post('advance-order', 'OrderController@storeAdvanceOrder')->name('order.store');
        Route::get('manage-order', 'KitchenStaffController@manageOrder')->name('manage.order');
        Route::post('complete-order', 'KitchenStaffController@completeOrder')->name('order.complete');

        Route::get('menu-report', 'KitchenStaffController@menuReport')->name('menu.report');



    }
);

Route::post('check-email','LoginController@checkEmail')->name('check.email');



