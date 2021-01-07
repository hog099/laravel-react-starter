<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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
//     return view('app');
// });


Route::get('/{url?}', function () {
    return view('app');
});


// Route::get('/login', [HomeController::class, 'login'])->name('login');
// Route::get('/register', [HomeController::class, 'register'])->name('register');
// Route::get('/home', [HomeController::class, 'home'])->name('home');
