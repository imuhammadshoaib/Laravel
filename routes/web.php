<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Users Route
Route::get('/users', [UserController::class, 'show'])->middleware(['auth'])->name('users');
Route::get('/create', [UserController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('/profile/{id}', [UserController::class, 'profile'])->middleware(['auth'])->name('profile');
Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/destory/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('destroy');
Route::post('/store', [UserController::class, 'store'])->middleware(['auth'])->name('store');

//Proctus Route
Route::resource('products', ProductController::class);
Route::get('/', [ProductController::class, 'frontend']);
Route::get('/productdetails/{id}', [ProductController::class, 'productdetails'])->name('productdetails');

//Roles Route
Route::resource('roles', RoleController::class);

//User Update trough query
//Route::get('changepassword', function() { $user = \App\Models\User::where('email', 'muhammad.shoaib@technologyally.com')->first(); $user->password = Hash::make('admin12345'); $user->save();  echo 'Password changed successfully.'; });


require __DIR__.'/auth.php';
