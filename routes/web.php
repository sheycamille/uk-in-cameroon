<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('auth.login');
});

//users routes starts here
Route::group(['prefix' => 'user','middleware' => ['auth'], ], function() {
  Route::get('/home', [UserController::class, 'home'])->name('home');
  Route::get('/account', [UserController::class, 'account'])->name('account');
  Route::get('/settings', [UserController::class, 'settings'])->name('setting');
  Route::get('/contact', [UserController::class, 'contact'])->name('contact');
  Route::get('/help', [UserController::class, 'help'])->name('help');
  //Route::get('/home', [UserController::class, 'home'])->name('home');
 
});
