<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::view('/login', 'auth.login')->name('login');

Route::view('/register', 'auth.register')->name('register');

Route::get('/tasks', function () {
    return view('tasks.index');
})->name('tasks.index');

Route::get('/projects', function () {
    return view('projects.index');
})->name('projects.index');
