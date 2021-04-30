<?php

use App\Http\Controllers\Admin\AdminConteroller;
use Illuminate\Support\Facades\Route;

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
 Route::get('/admin/dashboard',[AdminConteroller::class,'dashboard'])->name('dashboard');

 Route::get('/admin/bikes',[AdminConteroller::class,'bikes'])->name('bikes');

 Route::get('/admin/bookings',[AdminConteroller::class,'bookings'])->name('bookings');

 Route::get('/admin/customers',[AdminConteroller::class,'customers'])->name('customers');