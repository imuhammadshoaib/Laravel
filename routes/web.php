<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

//Route::get('/users', function () {
//    return view('users');
//})->middleware(['auth'])->name('users');

Route::get('/users', [UserController::class, 'show'])->middleware(['auth'])->name('users');
Route::get('/create', [UserController::class, 'create'])->middleware(['auth'])->name('create');
Route::get('/edit/{id}', [UserController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::post('/update/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('update');
Route::get('/destory/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('destroy');
Route::post('/store', [UserController::class, 'store'])->middleware(['auth'])->name('store');


require __DIR__.'/auth.php';
