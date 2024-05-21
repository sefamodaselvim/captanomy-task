<?php

use App\Livewire\Survey;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/survey/{survey?}', Survey::class)->name('survey');
});

require __DIR__.'/auth.php';
