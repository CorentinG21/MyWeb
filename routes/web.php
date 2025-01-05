<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApiSteamController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/ApiF1', function () {
    return view('apif1');
})->name('apif1');

// Route::get('/ApiSteam', function () {
//     return view('apisteam');
// })->name('apisteam');

Route::get('/apisteam', [ApiSteamController::class, 'InfoSteam'])->name('apisteam');

Route::get('/VeilleTechnologique', function () {
    return view('veilletechno');
})->name('veilletechno');

Route::get('/Contact', function () {
    return view('contact');
})->name('contact');

Route::get('/Infos', function () {
    return view('info');
})->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
