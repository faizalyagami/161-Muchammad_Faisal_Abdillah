<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");


Route::prefix('student')->name('student')->group(function () {
    
});
?>