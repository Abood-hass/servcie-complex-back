<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('auth:admin')
    ->name('admin.')
    ->group(function () {
        Route::get(
            '/dashboard',
            [
                DashboardController::class,
                'dashboard'
            ]
        )
            ->name('dashboard');

        Route::resource(
            'categories',
            CategoryController::class
        );
    });
