<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('layouts/add', function () {
    return view('layouts.add');
})->name('layouts.add');

Route::get('layouts/dash', function () {
    return view('layouts.dash');
})->name('layouts.dash');

Route::get('layouts/books', function () {
    return view('layouts.books');
})->name('layouts.books');

Route::get('layouts/returned', function () {
    return view('layouts.returned');
})->name('layouts.returned');

Route::get('layouts/borrow-form', function () {
    return view('layouts.borrow-form');
})->name('layouts.borrow-form');

Route::get('layouts/studentlist', function () {
    return view('layouts.studentlist');
})->name('layouts.studentlist');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/resident/add',[ResidentController::class, 'addResident'])->name('addResident');

?>
