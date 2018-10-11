<?php

Route::get('/new-post', function () {
    return view('web.posts.new-post');
});

Route::get('/', function () {
    return view('web.index');
});
