<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ChartController;

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

//Route::get('/records', [RecordController::class, 'index'])->name('record.index');
//Route::get('records/create',[RecordController::class, 'create'])->name('record.create');
//Route::post('records/store',[RecordController::class,'store'])->name('record.store');

Route::get('/users',[UserController::class, 'index'])->name('user.index');
Route::get('users/create',[UserController::class, 'create'])->name('user.create');
Route::post('users/store',[UserController::class, 'store'])->name('user.store');
Route::get('/delete',[UserController::class,'deleteSelect'])->name('user.select');
Route::delete('users/delete',[UserController::class, 'delete'])->name('user.delete');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'login'])->name('login.post');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function (){
    Route::get('/records', [RecordController::class, 'index'])->name('record.index');
    Route::get('records/create',[RecordController::class, 'create'])->name('record.create');
    Route::post('records/store',[RecordController::class,'store'])->name('record.store');
    Route::get('records/delete',[RecordController::class, 'show'])->name('record.show');
    Route::delete('records/delete/{id}',[RecordController::class, 'delete'])->name('record.delete');
    Route::get('/charts',[ChartController::class, 'index'])->name('chart.index');
    Route::get('/rank',[RecordController::class, 'rank'])->name('rank');
    Route::get('myPage', [UserController::class, 'myPage'])->name('user.myPage');
    Route::post('myPage', [UserController::class, 'update'])->name('myPage.update');
    Route::get('/users/initial', [UserController::class,'initial'])->name('user.initial');
    Route::post('/users/initial', [UserController::class, 'initialUpdate'])->name('initial.update');
    Route::get('category/show',[RecordController::class,'showCategory'])->name('category.show');
    Route::post('category/create',[RecordController::class, 'createCategory'])->name('category.create');
});
