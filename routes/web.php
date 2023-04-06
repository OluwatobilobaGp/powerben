<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PaymentPage;

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
    return view('auth/login');
});

Route::get('/login',[CustomAuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/reload-captcha',[CustomAuthController::class,'reloadCaptcha']);
Route::get('/registration',[CustomAuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/otukpo',[CustomAuthController::class,'otukpo'])->middleware('isLoggedIn');
Route::get('/apir',[CustomAuthController::class,'apir'])->middleware('isLoggedIn');
Route::get('/ip-apir-save-data/{ip_apir_station}/{ip_load_date}/{ip_hour}/{ip_feeder}/{ip_load_reading}/{ip_energy_reading}',[CustomAuthController::class,'ipsaveData'])->name('ip-apir-save-data');
Route::get('/ipout-apir-save-data/{ipout_apir_station}/{ip_outage_type}/{ip_out_feeder}/{ip_out_date_out}/{ip_out_date_in}/{ip_out_time_out}/{ip_out_time_in}/{ip_out_load_loss}',[CustomAuthController::class,'ipoutsaveData'])->name('ipout-apir-save-data');


Route::get('/yandev',[CustomAuthController::class,'yandev'])->middleware('isLoggedIn');
Route::get('/vw-ip-save/{ip_apir_station}/{vw_ip_feeder_date}/{vw_ip_feeder}',[CustomAuthController::class,'VwIpReading'])->name('vw-ip-save');

Route::get('/input-reading',[CustomAuthController::class,'InputReading'])->middleware('isLoggedIn');
Route::get('/view-reading',[CustomAuthController::class,'ViewReading'])->middleware('isLoggedIn');
Route::get('/print-reading',[CustomAuthController::class,'PrintReading'])->middleware('isLoggedIn');
Route::get('/input-outage',[CustomAuthController::class,'InputOutageReading'])->middleware('isLoggedIn');
Route::get('/view-outage',[CustomAuthController::class,'ViewOutageReading'])->middleware('isLoggedIn');
Route::get('/print-outage',[CustomAuthController::class,'InputOutageReading'])->middleware('isLoggedIn');


Route::get('/account_settings',[CustomAuthController::class,'account_settings']);
Route::get('/profile',[CustomAuthController::class,'profile']);
Route::post('/update-profile',[CustomAuthController::class,'updateProfile'])->name('update-profile');
Route::get('/withdrawal_details',[CustomAuthController::class,'withdrawal_details']);
Route::post('/update-withdrawal-details',[CustomAuthController::class,'updateWithdrawalDetails'])->name('update-withdrawal-details');
Route::get('/payment',[PaymentPage::class,'payment']);
Route::get('/logout',[CustomAuthController::class,'logout']);
