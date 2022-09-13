<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\homecontroller;
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
    return view('home',[
    'name' => 'toto',
    'html' => '<p> Salut </p>',
    'cars'=> ['Ferrari','Porshe','Renault'],
    ]);

});

Route::get('/home',[homecontroller::class, 'index'])->name('home');


Route::get('/a-propos',[AboutController::class, 'index'])->name('about');
Route::get('/a-propos/{id}', [AboutController::class, 'show'])->name('about.show');