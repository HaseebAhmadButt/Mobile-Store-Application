<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Resposne;
use App\Http\Controllers\userAuthFormController;
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
    return view('authFolder.logIn');
});

Route::get('/verifyEmail', function () {
    return view('verifyEmail');
});

Route::get('/register', function () {
    return view('authFolder.register', ['registered'=>true]);
});

Route::post('/registeringUser', [userAuthFormController::class, 'registerUser']);

Route::get('/forgotPassword', function () {
    return view('authFolder.forgotPassword.enterEmail');
})->name('forgotPassword');
