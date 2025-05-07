<?php

use Illuminate\Support\Facades\Route;
use Vegekul\Reporter\Http\Controllers\SprintReportController;

Route::prefix('vegekul-reporter')->middleware('web')->group(function () {
    Route::get('/dashboard', [SprintReportController::class, 'index']);
    Route::get('/sprint/{id}', [SprintReportController::class, 'sprint']);
});
