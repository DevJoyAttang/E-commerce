<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
 use App\Http\Controllers\AdminloginController;
 use App\Http\Controllers\HomeController;
 use App\Http\Controllers\productController;
 use App\Http\Controllers\UserController;
 
 
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

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('loginUser',[AuthController::class, 'loginUser'])->name('loginUser');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
Route::get('/home',[HomeController::class, 'home'])->name('home');
Route::get('/userReg',[AuthController::class,'userRegister'])->name('userReg');
Route::get('/products',[productController::class,'productview'])->name('products');
Route::get('admin/dashboard',[UserController::class,'viewAdminDasboard'])->name('admin.dashboard');
Route::get('/registeredusers',[UserController::class, 'registerview'])->name('registeredusers');
Route::get('/productregistration',[productController::class, 'productsfile'])->name('productregistration');
// Route::post('/productsform',[productController::class, 'createProduct'])->name('productsform');
Route::post('/product/create', [productController::class, 'productCreate'])->name('product.create');     
Route::get('/salesproduct',[productController::class,'productsales'])->name('sales.product');
Route::get('/editform/{productID}',[productController::class,'updateProduct'])->name('edit.product');
Route::put('/editupdate/{productID}',[productController::class,'editUpdate'])->name('editUpdate');
Route::get('/deleteproduct/{productID}',[productController::class,'deleteproduct'])->name('delete.product');