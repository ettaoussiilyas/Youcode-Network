<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['name'=> 'Youcoders List Below' , 'link'=>'/youcoders']);
});

Route::get('/youcoders', function () {
    $youcoders = [
        ['name'=> 'Ilyas', 'skills'=> 'Laravel, React, Next', 'id'=> 1],
        ['name'=> 'Ahmad', 'skills'=> 'PHP, Javascript, TypeScript', 'id'=> 2],
        ['name'=> 'Mohamed', 'skills'=> 'Python, C#, C++', 'id'=> 3],
        ['name'=> 'Ali', 'skills'=> 'Java, C, C++', 'id'=> 4],
        ['name'=> 'Samir', 'skills'=> 'C, C++', 'id'=> 5],
        ['name'=> 'Adnane', 'skills'=> 'C, C++', 'id'=> 6],
        ['name'=> 'Adam', 'skills'=> 'C, C++', 'id'=> 7]
    ];
    return view('youcoders.index', ['youcoders' => $youcoders]);

});

Route::get('/youcoders/create', function () {
    return view('youcoders.create');
});

Route::get('/youcoders/{id}', function($id) {

    return view('youcoders.show', ['id'=>$id]);
});

