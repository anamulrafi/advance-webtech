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