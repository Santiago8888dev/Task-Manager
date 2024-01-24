<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('welcome'));


require __DIR__.'/auth.php';
