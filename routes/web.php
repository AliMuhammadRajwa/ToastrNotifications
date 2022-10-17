<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinksController;

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

Route::get('/Addsomething',[LinksController::class,'index'])->name('addsomething');
Route::post('/store',[LinksController::class,'store'])->name('text.store');
Route::get('/ViewTexts',[LinksController::class,'fetch'])->name('text.view');
Route::get('/delete/{id}',[LinksController::class,'delete'])->name('text.delete');
