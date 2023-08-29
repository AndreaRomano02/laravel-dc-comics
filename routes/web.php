<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

// Route::resource('comics', ComicController::class);

// Route Comics
Route::get('/comics', [ComicController::class, "index"])->name("comics.index");

// Route on Create Page

Route::get('/comics/create', [ComicController::class, "create"])->name("comics.create");

// Route on edit

Route::get('/comics/{comic}/edit', [ComicController::class, "edit"])->name("comics.edit");

// Route on Store 

Route::post('/comics', [ComicController::class, "store"])->name("comics.store");

// Route Single Comic

Route::get('/comics/{comic}', [ComicController::class, "show"])->name("comics.show");

// Route on Update

Route::put('/comics/{comic}', [ComicController::class, "update"])->name("comics.update");


// Route Destroy

Route::delete('/comics/{comic}', [ComicController::class, "destroy"])->name("comics.destroy");
