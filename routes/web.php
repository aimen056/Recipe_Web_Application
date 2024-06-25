<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\grocerylistcontroller;

Route::get('/', [grocerylistcontroller::class, 'grocery']);

Route::post('/saveItemroute', [grocerylistcontroller::class, 'saveItem'])->name('saveItem');

Route::post('/markCompleteroute', [grocerylistcontroller::class, 'markComplete'])->name('markComplete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
