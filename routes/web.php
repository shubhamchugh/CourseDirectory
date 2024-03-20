<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('edublink.content.home.index');
})->name('home.index');

Route::get('/about-us', function () {
    return view('edublink.content.about.index');
})->name('about');

Route::get('/blog-page', function () {
    return view('edublink.content.blog.pages.index');
});

Route::get('/blog-post', function () {
    return view('edublink.content.blog.posts.index');
})->name('blog.post.index');

Route::get('/blog-list', function () {
    return view('edublink.content.blog.lists.index');
})->name('blog.list.index');

Route::get('/course-details', function () {
    return view('edublink.content.course.details.index');
});

Route::get('/course-list', function () {
    return view('edublink.content.course.lists.index');
})->name('course.list.index');
