<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logged-out', function () {
    return view('auth.logged-out');
})->name('out');

Route::get('/authenticated',function () {
    return view('auth.authenticated');
})->name('authenticated')->middleware('auth');

Route::get('/unauthenticated',function () {
    return view('auth.unauthenticated');
})->name('unauthenticated');

// Route::get('/done',function () {
//     return 'Congratulations ! You have successfully logged in';
// });

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[AuthController::class,'show']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/logout', [Logoutcontroller::class, 'destroy'])
    ->middleware('auth');


