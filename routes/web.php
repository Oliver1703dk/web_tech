<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;



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

//Route::get('/register', function () {
//    return view('register');
//})->name('register');


Route::get('/userReg' , [RegistrationController::class, 'userReg'])->name('userReg');
Route::post('/userReg', [RegistrationController::class, 'userRegPost'])->name('userRegPost');

Route::get("/login", [AuthenticationController::class, 'login'])->name('login');
Route::post('/login', [AuthenticationController::class, 'loginPost'])->name('loginPost');
Route::post('/logout', [AuthenticationController::class, 'logoutPost'])->name('logoutPost');

Route::get('/checkoutPage' , [PaymentController::class, 'indexCheckoutPage'])->name('checkoutPage');
Route::post('/checkoutPagePost', [PaymentController::class, 'checkoutPagePost'])->name('checkoutPagePost');

//Route::post('/paymentComplete', [PaymentController::class, 'checkoutPagePost'])->name('paymentComplete');


Route::get('/productPage' , [ProductController::class, 'productPage'])->name('productPage');


Route::post('/addItem', [CartController::class, 'addItem'])->name('addItem');

Route::get('/', [ProductController::class, 'index'])->name('index');


Route::get('/cart', [CartController::class, 'index'])->name('cart');


Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');

Route::get('/productsCatalog', [ProductController::class, 'indexProducts'])->name('productsCatalog');

Route::post('/', [ProfileController::class, 'changePassword'])->name('changePassword');


Route::post('/cartMinus', [CartController::class, 'minusQuantity'])->name('minusQuantity');


Route::get('/productPageAdmin', [productController::class, 'productPageAdmin'])->name('productPageAdmin');

Route::post('/addProductDB', [ProductController::class, 'addProductDB'])->name('addProductDB');
Route::post('/deleteProduct', [ProductController::class, 'deleteProduct'])->name('deleteProduct');





