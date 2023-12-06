<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');;

Route::get('/test', function () {
    return view('test');
})->name('TEST');

Route::get('/userReg', function () {
    return view('userReg');
})->name('userReg');

Route::get('/checkoutPage', function () {
    return view('checkoutPage');
})->name('checkoutPage');

Route::get('/paymentComplete', function () {
    return view('paymentcomplete');
})->name('paymentComplete');



Route::get('/ProductPage', function () {
    return view('ProductPage');
})->name('ProductPage');

//Route::get('/register', function () {
//    return view('register');
//})->name('register');


Route::get('/userReg' , [RegistrationController::class, 'userReg'])->name('userReg');
Route::post('/userReg', [RegistrationController::class, 'userRegPost'])->name('userRegPost');

Route::get("/login", [AuthenticationController::class, 'login'])->name('login');
Route::post('/login', [AuthenticationController::class, 'loginPost'])->name('loginPost');
Route::post('/logout', [AuthenticationController::class, 'logoutPost'])->name('logoutPost');

Route::get('/checkoutPage' , [PaymentController::class, 'checkoutPage'])->name('checkoutPage');
Route::post('/checkoutPagePost', [PaymentController::class, 'checkoutPagePost'])->name('checkoutPagePost');



