<?php
use App\Http\Controllers\CustomerController;
use App\Models\customer;
use App\Models\Admin;
use App\Http\Controllers\AdminController;
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
Route::get('/customer/register', [customerController::class, 'register'])->name('customer/register');
Route::post('/customer/register', [customerController::class, 'store'])->name('customer/register');
Route::get('/customer/list', [customerController::class, 'get_all'])->name('customer/list');
Route::get('/customer/edit/{id}', [customerController::class, 'edit']);
Route::post('/customer/update',[customerController::class,'update'])->name('customer/update');
Route::get('/customer/delete/{id}', [customerController::class, 'delete']);
Route::get('/customer/search/{id}', [customerController::class, 'search'])->name('customer/search');
Route::get('/Admin/register', [AdminController::class, 'register'])->name('Admin/register');
Route::post('/Admin/register', [AdminController::class, 'store'])->name('Admin/register');
Route::get('/Account/register', [AccountController::class, 'register'])->name('Account/register');
Route::post('/Account/register', [AccountController::class, 'store'])->name('Account/register');
Route::get('/Admin/list', [AdminController::class, 'get_all'])->name('Admin/list');
Auth::routes();