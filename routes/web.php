<?php

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

    $data = [
        'ciao' => 'Hello World!',
    ];

    return view('home', $data);
})->name('home');

Route::get('/header', function () {

    $header = 'This is the header';

    return view('header', compact('header'));
})->name('header');

Route::get('/main', function () {

    $main = 'This is the main';

    return view('main', compact('main'));
})->name('main');
Route::get('/footer', function () {

    $footer = 'This is the footer';

    return view('footer', compact('footer'));
})->name('footer');
