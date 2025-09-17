<?php

use Illuminate\Support\Facades\Route;


Route::prefix('notes')->as('notes.')->group(function(){
    Route::post('/', \App\Http\Controllers\Memos\CreateController::class)->name('create');
    Route::get('/', \App\Http\Controllers\Memos\ListController::class)->name('list');
    Route::delete('{id}',\App\Http\Controllers\Memos\DeleteController::class)->name('delete');

});
