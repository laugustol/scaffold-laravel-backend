<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    echo "Hello Word";
});

Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('/upload', 'UserController@upload');
});