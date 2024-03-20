<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('edublink.content.home.index');
});

Route::get('/blog-page', function () {
    return view('edublink.content.home.index');
});

Route::get('/blog-post', function () {
    return view('edublink.content.home.index');
});

Route::get('/course-details', function () {
    return view('edublink.content.course.details.index');
});

Route::get('/course-list', function () {
    return view('edublink.content.home.index');
});
