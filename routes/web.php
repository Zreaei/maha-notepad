<?php

use App\Http\Controllers\{
    Admin\AdminNoteController,
    User\UserNoteController
};

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

Route::get('/', function () {
    return view('welcome');
});

// Login - Register
Route::controller(LoginController::class)->group(function(){
    // 
});

// Logout

// Admin
Route::controller(AdminNoteController::class)->group(function(){
    // 
});

// User
Route::controller(UserNoteController::class)->group(function(){
    // 
});