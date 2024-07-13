<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/protected', function (): RedirectResponse {
    // Delete the 'auth' key to make sure next calls to this route requires password again
    // I could have changed the auth.password_timeout value too
    session()->forget('auth');

    return redirect('/dashboard')->with('message', 'It worked!');
})->middleware('password.confirm');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
