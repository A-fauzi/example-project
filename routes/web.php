<?php

use App\Http\Controllers\Client\ClientController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth'])
    ->name('dashboard');

// Web Client
Route::get('/client', [ClientController::class, 'home']);
Route::get('/client/explore', [ClientController::class, 'explore']);
Route::get('/client/aboutUs', [ClientController::class, 'aboutUs']);
Route::get('/client/contactUs', [ClientController::class, 'contactUs']);

require __DIR__ . '/auth.php';
