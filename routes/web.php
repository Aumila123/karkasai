<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('conferences',ConferenceController::class);
