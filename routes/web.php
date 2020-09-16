<?php
use Illuminate\Http\Request;
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
    return view('index');
});

Route::get('/exam', function ()
{
return view('exam');
});

Route::get('/tax', function ()
{
return view('tax');
});

Route::get('/pay', function ()
{
return view('pay');
});

Route::get('/lesson', function ()
{
return view('lesson');
});




Route::get('members-register', 'AuthController@showRegisterForm')->name('members.register');
Route::post('members-register', 'AuthController@register');
Route::get('members-login', 'LogController@showLoginForm')->name('members.login');
Route::post('members-login', 'LogController@login');
Route::get('/members/successlogin', 'LogController@successlogin')->middleware('auth');
Route::get('/members/successlogin', 'OnlineController@index')->middleware('auth');
Route::get('/logout', 'LogController@logout');

Route::get('/members/successlogin/create', 'OnlineController@create')->middleware('auth');
Route::post('/members/successlogin', 'OnlineController@store')->middleware('auth');
Route::get('/members/successlogin/{movie}/edit', 'OnlineController@edit')->middleware('auth');
Route::patch('/members/successlogin/{movie}', 'OnlineController@update')->middleware('auth');
Route::delete('/members/successlogin/{movie}', 'OnlineController@destroy')->middleware('auth');
Route::get('/members/successlogin/{movie}', 'OnlineController@show')->middleware('auth');

Route::get('/members/vehiclelogin', 'VehicleController@index')->middleware('auth');
Route::get('/members/vehiclelogin/vcreate', 'VehicleController@create')->middleware('auth');
Route::post('/members/vehiclelogin', 'VehicleController@store')->middleware('auth');
Route::get('/members/vehiclelogin/{movie}/vedit', 'VehicleController@edit')->middleware('auth');
Route::patch('/members/vehiclelogin/{movie}', 'VehicleController@update')->middleware('auth');
Route::delete('/members/vehiclelogin/{movie}', 'VehicleController@destroy')->middleware('auth');
Route::get('/members/vehiclelogin/{movie}', 'VehicleController@show')->middleware('auth');

Route::get('status', 'PaymentController@getPaymentStatus')->middleware('auth');
Route::post('paypal', 'PaymentController@payWithpaypal')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('saveWatch', 'OnlineController@saveWatch');