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
    return view('budayaku');
});

//Route Regist to Dashboard
Route::get('/dashboard', function () {
    return view('budayaku');
})->name('dashboard');

//Route view Users
Route::get('/jawa',[BudayakuController::class,'pulauJawa'])->name('jawa');
Route::get('/sumatra',[BudayakuController::class,'pulauSumatra'])->name('sumatra');
Route::get('/kalimantan',[BudayakuController::class,'pulauKalimantan'])->name('kalimantan');
Route::get('/sulawesi',[BudayakuController::class,'pulauSulawesi'])->name('sulawesi');
Route::get('/papua',[BudayakuController::class,'pulauPapua'])->name('papua');
Route::get('/suku/{id_budaya}',[BudayakuController::class,'suku'])->name('suku');
Route::get('/pengajuan',[BudayakuController::class, 'pengajuan'])->name('pengajuan');
Route::get('/about_us',[BudayakuController::class,'about_us'])->name('about_us');
Route::get('/search',[BudayakuController::class, 'search'])->name('search');

Route::middleware(['auth'])->group(function () {
    Route::get('/pengajuan', [BudayakuController::class,'pengajuan'])->name('pengajuan');
});



//Route View Admin
Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin', [AdminController::class,'index'])->name('admin');
    Route::get('/create',[AdminController::class,'create'])->name('create');
    Route::post('/budaya/store',[AdminController::class,'store'])->name('add_data');
    Route::get('/budaya/edit/{id_budaya}',[AdminController::class ,'edit']);
    Route::get('/budaya/destroy/{id_budaya}',[AdminController::class ,'destroy']);
});



//Route Users Acount Seting
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::fallback(function () {
    return view('errors.404');
});
require __DIR__.'/auth.php';
