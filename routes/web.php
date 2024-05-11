<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    $users = [
        [
            "id" => 1,
            "name" => "faisal",
            "age" => 32
        ],
        [
            "id" => 2,
            "name" => "faqih",
            "age" => 4
        ]
        ];
        return $users;
});
