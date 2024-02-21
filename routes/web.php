<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\Http\Controllers\ShortLinkController;

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
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/register', [UserController::class,'register']); 
Route::post('/login', [UserController::class,'login']); 
Route::post('/logout', [UserController::class,'logout']); 


Route::get('/home', function () {
    return view('home');
});

Route::get('/generate', [ShortLinkController::class,'index'])->name('ShortLink.index');
Route::post('/generate', [ShortLinkController::class,'store'])->name('ShortLink.store');
// Route::get('{code}',[ShortLinkController::class,'shortenLink'])->name('ShortLink.shortenLink');
Route::get('/generate/{link}/edit',[ShortLinkController::class,'edit'])->name('ShortLink.edit');
Route::put('/generate/{link}/update',[ShortLinkController::class,'update'])->name('ShortLink.update');
Route::delete('/product/{link}/delete',[ShortLinkController::class,'delete'])->name('ShortLink.delete');





