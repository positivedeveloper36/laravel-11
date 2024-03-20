<?php

use App\Exceptions\ValidationError;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/validation', function (){
    throw new ValidationError("Invalid input");
});
