<?php

use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('page');
// });

Route::get('/test', function () {
    return view('test');
});

Route::get('/tableau', function () {
    return view('tableau');
});
Route::get('/app', function () {
    return view('layouts/app');
});


Route::get('/', function () {
    return view('index');
});



Route::controller(CommandeController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/commande/create', 'create');
    Route::get('/commande/{id}', 'show');
    Route::get('/commande/{id}/edit', 'edit');


    Route::post('/commande', 'store');
    Route::patch('/commande/{id}', 'update');
    Route::delete('/commande/{id}', 'destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
