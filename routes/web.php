<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', function () {

    return view('auth.login');

})->name('login');

Route::get('/home', function () {
    
    return view('home');

})->name('home');


Route::middleware(['auth'])->group(function(){


    Route::get('/users', [ UserController::class, 'index']);

    Route::get('/users/create', [ UserController::class, 'create']);

    Route::get('users/{id}' , [UserController::class, 'show']);

    Route::post('/users', [UserController::class, 'store']);
    
    Route::put('/users',[UserController::class, 'update']);

});


 










