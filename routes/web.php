<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Supplier\ProductController;
use App\Http\Controllers\Supplier\RegisterController;

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

Auth::routes();

Route::get('/supplier/register', [RegisterController::class, 'index'])->name('supplier.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::post('/user/deactivate', [UserController::class, 'deactivate'])->name('user.deactivate');
    Route::post('/user/activate', [UserController::class, 'activate'])->name('user.activate');
    Route::post('/user/ban', [UserController::class, 'ban'])->name('user.ban');
    Route::post('/user/approve', [UserController::class, 'approve'])->name('user.approve');
});
