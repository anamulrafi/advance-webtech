<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
//Home Page
Route::get('/customer/home',[CustomerController::class,'home'])->name('customer.Home');
//Gallery
Route::get('/customer/gallery',[CustomerController::class,'gallery'])->name('customer.gallery');

///add or signup
Route::get('/customer/add', [CustomerController::class, 'addCustomer'])->name('customer.add');
Route::post('/customer/add', [CustomerController::class, 'addCustomerSubmit'])->name('customer.add.submit');

///login
Route::get('/customer/login',[CustomerController::class,'login']);
Route::post('/customer/login',[CustomerController::class,'loginsubmit'])->name('customer.login.submit');

///panel
Route::get('/customer/panel',[CustomerController::class,'customerPanel'])->name('customer.panel')->middleware('customerAuthorized');

//logout
Route::get('/customer/logout', [CustomerController::class, 'cusotmerLogout'])->name('customer.logout');

///profile
Route::get('/customer/profile', [CustomerController::class, 'customerProfile'])->name('customer.profile')->middleware('customerAuthorized');

///room book
Route::get('/customer/room/book', [CustomerController::class, 'customerRoomBook'])->name('customer.room.book')->middleware('customerAuthorized');
Route::post('/customer/room/book', [CustomerController::class, 'customerRoomBookSubmit'])->name('customer.room.book.submit')->middleware('customerAuthorized');

/// book room list
Route::get('/customer/room/book/list', [CustomerController::class, 'customerRoomBookList'])->name('customer.room.book.list')->middleware('customerAuthorized');

///Delete room book
Route::get('/customer/room/book/delete/{id}',[CustomerController::class,'customerRoomBookDelete'])->name('customer.room.book.delete')->middleware('customerAuthorized');

//edit room book
Route::get('/customer/room/book/edit/{id}',[CustomerController::class,'customerRoomBookEdit'])->name('customer.room.book.edit')->middleware('customerAuthorized');
Route::post('/customer/room/book/edit',[CustomerController::class,'customerRoomBookEditSubmit'])->name('customer.room.book.edit.submit')->middleware('customerAuthorized');
