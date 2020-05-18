<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:api'])
    ->name('api.dashboard.')
    ->prefix('api/dashboard')
    ->group(function () {

        //
        
    });

