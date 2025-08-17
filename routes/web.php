<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/eyce', function (){
    $blogs = [
        ["id" => 1, "title" => "First Week", "skill" => 75, "content" => "description"],
        ["id" => 2, "title" => "Second Week", "skill" => 50, "content" => "description"]
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
