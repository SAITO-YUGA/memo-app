<?php

use Illuminate\Support\Facades\Route;


Route::prefix('notes')->as('notes.')->group(function(){
    Route::post('', \App\Http\Controllers\Memos\CreateController::class)->name('create');
});
