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
    return view('paralax2');
});
Route::get('/prl1', function () {
    return view('paralax1');
});
Route::get('/prl2', function () {
    return view('paralax2');
});
Route::get('/prl3', function () {
    return view('paralax3');
});
Route::get('/prl4', function () {
    return view('paralax4');
});
Route::get('/prl5', function () {
    return view('paralax5');
});
Route::get('/prl6', function () {
    return view('paralax6');
});
Route::get('/prl7', function () {
    return view('paralax7');
});
Route::get('/prl8', function () {
    return view('paralax8');
});
Route::get('/prl9', function () {
    return view('paralax9');
});
