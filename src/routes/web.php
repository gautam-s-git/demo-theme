<?php

use Illuminate\Support\Facades\Route;
use Archangel\Packages\Http\Controllers\LoadThemeController;

Route::group(['prefix' => 'theme'], function () {
    Route::get('list', [LoadThemeController::class, 'list']);
    Route::get('store', [LoadThemeController::class, 'storeTheme']);
});
