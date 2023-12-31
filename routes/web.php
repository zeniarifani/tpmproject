<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[RecipesController::class,'show'])->name('show');
Route::get('/create',[RecipesController::class,'create'])->name('create');
Route::post('/store',[RecipesController::class,'store'])->name('store');
Route::get('/edit/{id}',[RecipesController::class,'edit'])->name('edit');
Route::patch('/update/{id}',[RecipesController::class,'update'])->name('update');
Route::delete('/delete/{id}',[RecipesController::class,'delete'])->name('delete');
