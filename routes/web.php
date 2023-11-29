<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/UserReg', function () {
    return view('UserReg');
})->name('UserReg');

Route::get('/CheckoutPage', function () {
    return view('CheckoutPage');
})->name('CheckoutPage');

Route::get('/ProductPage', function () {
    return view('ProductPage');
})->name('ProductPage');

//Route::get('/register', function () {
//    return view('register');
//})->name('register');


Route::get('/UserReg' , [RegistrationController::class, 'UserReg'])->name('UserReg');
Route::post('/UserReg', [RegistrationController::class, 'UserRegPost'])->name('UserReg');

Route::get("/Login", [AuthenticationController::class, 'Login'])->name('Login');
Route::post('/Login', [AuthenticationController::class, 'LoginPost'])->name('Login');
