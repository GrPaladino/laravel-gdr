<?php
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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


// Rotte tabella Items
Route::get('/', [ItemController::class, 'index'])->name('home');


// Rotte tabella Characters
Route::resource('character', CharactersController::class);
