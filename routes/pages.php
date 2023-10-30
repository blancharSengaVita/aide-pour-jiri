<?php

use App\Http\Controllers\JiriController;

Route::middleware('auth')->group(function () {
    Route::get('/jiris', [JiriController::class, 'index']);
    Route::get('/jiris/create', [JiriController::class, 'create']);
    Route::post('/jiris', [JiriController::class, 'store']);
});
