<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backoffice\PostController;

Route::prefix('backoffice')->name('backoffice.')->group(function () {
    Route::resource('posts', PostController::class);
});

