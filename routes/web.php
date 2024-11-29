<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view ('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view ('login');
})->name('login');

Route::get('/dashboard', function () {
    return view ('dashboard');
})->name('dashboard');

Route::get('/record-ternak', function () {
    return view ('record-ternak');
})->name('record-ternak');

Route::get('/tambah-ternak', function () {
    return view ('tambah-ternak');
})->name('tambah-ternak');

Route::get('/detail-ternak', function () {
    return view ('detail-ternak');
})->name('detail-ternak');

Route::get('/pertumbuhan-ternak', function () {
    return view ('pertumbuhan-ternak');
})->name('pertumbuhan-ternak');

Route::get('/penyakit-ternak', function () {
    return view ('penyakit-ternak');
})->name('penyakit-ternak');

Route::get('/stock-pakan', function () {
    return view ('stock-pakan');
})->name('stock-pakan');

Route::get('/market-ternak', function () {
    return view ('market-ternak');
})->name('market-ternak');

Route::get('/detail-market-ternak', function () {
    return view ('detail-market-ternak');
})->name('detail-market-ternak');


