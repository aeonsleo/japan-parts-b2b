<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Supplier\ProductController;
use App\Http\Controllers\Supplier\RegisterController;
use App\Http\Controllers\Admin\CategoryFieldController;
use App\Http\Controllers\Admin\CategoryFieldOptionController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\SupplierController as AdminSupplierController;
use App\Http\Controllers\Supplier\DashboardController as SupplierDashboardController;

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

Route::get('/test-parts-catalog', function () {
    return view('test-parts-catalog');
});

Auth::routes(['verify' => true]);

Route::get('/supplier/register', [RegisterController::class, 'showForm'])->name('supplier.register');
Route::post('/supplier/register', [RegisterController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Supplier
Route::group(['prefix' => 'supplier', 'middleware' => ['auth']], function() {
    Route::get('/home', [SupplierDashboardController::class, 'index'])->name('supplier.home');
    Route::get('/products/create', [ProductController::class, 'create'])->name('supplier.product.create');
    Route::get('/products/oem/create', [ProductController::class, 'createOemProduct'])->name('supplier.product.create-oem');
    Route::post('/products/oem/store', [ProductController::class, 'storeOemProduct'])->name('supplier.product.store-oem');
    Route::get('/products/aftermarket/create', [ProductController::class, 'createAftermarketProduct'])->name('supplier.product.create-aftermarket');
});

//Admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('suppliers', AdminSupplierController::class);
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('category-fields', CategoryFieldController ::class);
    Route::resource('category-field-options', CategoryFieldOptionController::class);
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');
    Route::post('/user/deactivate', [UserController::class, 'deactivate'])->name('user.deactivate');
    Route::post('/user/activate', [UserController::class, 'activate'])->name('user.activate');
    Route::post('/user/ban', [UserController::class, 'ban'])->name('user.ban');
    Route::post('/user/approve', [UserController::class, 'approve'])->name('user.approve');
});
