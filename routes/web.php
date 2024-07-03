<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fromController;
use App\Http\Controllers\FormValidation;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/contact', 'form.contact');
// Route::get('/contact', [fromController::class, 'contact']);

Route::view('/contact','form.contact')->name('form.get');
// Route::post('/formhandle', [fromController::class, 'formHandle'])->name('form.post');
Route::post('/formhandle', [FormValidation::class, 'checkValidation'])->name('form.post');


