<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::match(['GET', 'POST'], '/register', function(){
	return redirect('/login');
})->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
