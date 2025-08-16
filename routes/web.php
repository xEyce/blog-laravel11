<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eyce', function (){
    $blogs = [
        ["id" => 1, "title" => "First Week", "date" => "8-17-2025", "content" => "description"],
        ["id" => 2, "title" => "Second Week", "date" => "8-124-2025", "content" => "description"]
    ];

    return view('eyce.index', ["greeting" => "Welcome to my Blog page!",
                "blogs" => $blogs]);
});

Route::get('/eyce/create', function () {
    return view('eyce.create');
});

Route::get('/eyce/{id}', function ($id) {
    return view('eyce.show', ["id" => $id]);
});
