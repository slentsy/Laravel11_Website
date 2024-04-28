<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


// buat dua route baru 
// 1. /blog
// 2 buah artikel, judul dan isi 
// 2. /contact
// email / social media 