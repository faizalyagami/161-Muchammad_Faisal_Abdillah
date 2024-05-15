<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/', function () {
        return view('page.user');
    });
});

Route::prefix('student')->name('student')->group(function () {
    Route::get('/', function () {
        return view('page.student');
    });
});
?>
