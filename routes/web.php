<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DestinationController;

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

Route::get('/', [PublicController::class,'Welcome'])->name('welcome');
Route::get('/schede/{id}', [PublicController::class,'Schede'])->name('schede');
Route::get('/card', [PublicController::class,'card'])->name('card');
Route::get('/assicurazioni', [PublicController::class,'Assicurazioni'])->name('assicurazioni');
Route::get('/contatti', [PublicController::class,'Contatti'])->name('contatti');
Route::post('/contatti/submit', [PublicController::class,'ContactSubmit'])->name('contactSubmit');
Route::get('/sendmail', [PublicController::class,'sendmail'])->name('sendmail');

// rotta destiinazioni
Route::get('/article/create', [ArticleController::class,'create'])->name('article_create');
Route::post('/article/store', [ArticleController::class,'store'])->name('article_store');









