<?php

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
    return view('welcome');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/projects/gif-maker', function () {
    return view('projects/gif-maker');
});

Route::get('/projects/EER', function () {
    return view('projects/EER');
});

Route::get('/projects/Blog-Platform', function () {
    return view('projects/Blog-Platform');
});

Route::get('/projects/To-Do-Project', function () {
    return view('projects/To-Do-Project');
});