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

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/routes', function () {
    return view('landing.partial.routes');
});

Route::get('/routes', 'listcontroller@showlandingroutes')->name('showlandingroutes');

Route::get('/pdashboard', function () {
    return view('passenger.pdashboard');
});

Route::get('/loginpassenger', function () {
    return view('passenger.login');
});

Route::get('/registerpassenger', function () {
    return view('passenger.register');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@dashcount')->name('dashboard');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adddriver', 'HomeController@adddriver')->name('adddriver');

Route::get('/addbus', 'HomeController@addbus')->name('addbus');

Route::get('/listbus', 'listController@showbus')->name('listbus');

Route::get('/listdriver', 'listController@showdriver')->name('showdriver');

Route::get('/updatebus', 'listcontroller@updatebus')->name('updatebus');

Route::get('/delete/{busid}', 'listcontroller@deletebus')->name('deletebus');

Route::get('/deletedriver/{busid}', 'listcontroller@deletedriver')->name('deletedriver');

Route::get('/updateroutes', 'listcontroller@updateroutes')->name('updateroutes');

Route::get('/updatedrivers', 'listcontroller@showupdatedriver')->name('showupdatedriver');

Route::get('/updatereservation', 'listcontroller@updatereservation')->name('updatereservation');

Route::get('/updatepassenger', 'listcontroller@showupdatepassenger')->name('showupdatepassenger');

Route::get('/deleteroutes/{id}', 'listcontroller@deleteroutes')->name('deleteroutes');

Route::get('/deletereservation/{id}', 'listcontroller@deletereservation')->name('deletereservation');

Route::get('/deletepassenger/{id}', 'listcontroller@deletepassenger')->name('deletepassenger');

Route::get('/deleteuser/{userid}', 'listcontroller@deleteuser')->name('deleteuser');

Route::get('/edit/{busid}', 'listcontroller@editbus')->name('editbus');

Route::get('/editdriver/{busid}', 'listcontroller@showeditdriver')->name('showeditdriver');

Route::post('/edit', 'listcontroller@edit')->name('edit');

Route::post('/editdriverform', 'listcontroller@editdriverform')->name('editdriverform');

Route::get('/addroutes', 'HomeController@addroutes')->name('addroutes');

Route::get('/listroutes', 'listController@showroutes')->name('showroutes');

Route::get('/listpassenger', 'listController@showpassenger')->name('showpassenger');

Route::get('/listreservation', 'listController@showreservation')->name('showreservation');

Route::get('/users', 'listController@showusers')->name('showusers');

Route::post('/submitbus', 'AddbusController@savebus')->name('savebus');

Route::post('/submitreservation', 'ReservationController@savereservation')->name('savereservation');

Route::post('/submitdriver', 'AddDriversController@savedriver')->name('savedriver');

Route::post('/submitpassenger', 'PassengersControllers@savepassenger')->name('savepassenger');

Route::post('/adduser', 'usersController@adduser')->name('adduser');

Route::post('/submitroutes', 'AddroutesController@saveroutes')->name('saveroutes');

Route::get('routestatus/{id}', 'statuscontroller@routestatus')->name('routestatus');

Route::get('busstatus/{id}', 'statuscontroller@busstatus')->name('busstatus');

Route::get('driverstatus/{id}', 'statuscontroller@driverstatus')->name('driverstatus');

Route::get('passengerstatus/{id}', 'statuscontroller@passengerstatus')->name('passengerstatus');

Route::get('/addpassenger', 'HomeController@addpassenger')->name('addpassenger');

Route::get('/reservebus', 'ReservationController@fetchreservationdata')->name('fetchreservationdata');




