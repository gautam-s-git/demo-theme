<?php

use Illuminate\Support\Facades\Route;
use Archangel\Themes\Http\Controllers\LoadThemeController;

Route::group(['prefix' => 'theme'], function () {
    Route::get('list', [LoadThemeController::class, 'list']);
    Route::get('store', [LoadThemeController::class, 'storeTheme']);
});
