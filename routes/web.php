<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/protected', function (): RedirectResponse {
    session()->flash('message', 'It worked!');

    return redirect('/');
});
