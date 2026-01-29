<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return  ('welcome');
});
 // About page route for practice project
Route::get('/about', function() {
    return view('about'); 

});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
