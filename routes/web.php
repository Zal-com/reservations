<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalityController;
use App\Http\Controllers\ArtistController;

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

Route::get('/artists', [ArtistController::class, 'index'])
    ->name('artists.index');

Route::get('/artists/{id}', [ArtistController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('artists.show');

Route::get('/artist/edit/{id}', [ArtistController::class, 'edit'])
	->where('id', '[0-9]+')
    ->name('artists.edit');

Route::put('/artist/{id}', [ArtistController::class, 'update'])
	->where('id', '[0-9]+')
    ->name('artists.update');

Route::get('/localities', [LocalityController::class, 'index'])
    ->name('localities.index');

Route::get('/localities/{id}', [LocalityController::class, 'show'])
    ->where('id', '[0-9]+')
    ->name('localities.show');

