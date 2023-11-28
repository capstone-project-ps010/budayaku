<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BudayakuController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route Regist to Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route view Users
Route::get('/jawa',[BudayakuController::class,'pulauJawa'])->name('jawa');
Route::get('/sumatra',[BudayakuController::class,'pulauSumatra']);
Route::get('/kalimantan',[BudayakuController::class,'pulauKalimantan']);
Route::get('/sulawesi',[BudayakuController::class,'pulauSulawesi']);
Route::get('/papua',[BudayakuController::class,'pulauPapua']);



//Route View Admin
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin', [AdminController::class,'index']);


});



//Route Users Acount Seting
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
