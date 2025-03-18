<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\OnlineController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VehicleController;
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




Route::get('members-register', [AuthController::class, 'showRegisterForm'])->name('members.register');
Route::post('members-register', [AuthController::class, 'register']);

Route::get('members-login', [LogController::class, 'showLoginForm'])->name('members.login');
Route::post('members-login', [LogController::class, 'login']);

Route::get('/members/successlogin', [LogController::class, 'successlogin'])->middleware('auth');
Route::get('/members/successlogin', [OnlineController::class, 'index'])->middleware('auth');

Route::get('/logout', [LogController::class, 'logout']);

Route::get('/members/successlogin/create', [OnlineController::class, 'create'])->middleware('auth');
Route::post('/members/successlogin', [OnlineController::class, 'store'])->middleware('auth');
Route::get('/members/successlogin/{movie}/edit', [OnlineController::class, 'edit'])->middleware('auth');
Route::patch('/members/successlogin/{movie}', [OnlineController::class, 'update'])->middleware('auth');
Route::delete('/members/successlogin/{movie}', [OnlineController::class, 'destroy'])->middleware('auth');
Route::get('/members/successlogin/{movie}', [OnlineController::class, 'show'])->middleware('auth');

Route::get('/members/vehiclelogin', [VehicleController::class, 'index'])->middleware('auth');
Route::get('/members/vehiclelogin/vcreate', [VehicleController::class, 'create'])->middleware('auth');
Route::post('/members/vehiclelogin', [VehicleController::class, 'store'])->middleware('auth');
Route::get('/members/vehiclelogin/{movie}/vedit', [VehicleController::class, 'edit'])->middleware('auth');
Route::patch('/members/vehiclelogin/{movie}', [VehicleController::class, 'update'])->middleware('auth');
Route::delete('/members/vehiclelogin/{movie}', [VehicleController::class, 'destroy'])->middleware('auth');
Route::get('/members/vehiclelogin/{movie}', [VehicleController::class, 'show'])->middleware('auth');

Route::get('status', [PaymentController::class, 'getPaymentStatus'])->middleware('auth');
Route::post('paypal', [PaymentController::class, 'payWithpaypal'])->middleware('auth');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('login/github', [LoginController::class, 'redirectToProvider']);
Route::get('login/github/callback', [LoginController::class, 'handleProviderCallback']);

Route::post('saveWatch', [OnlineController::class, 'saveWatch']);
