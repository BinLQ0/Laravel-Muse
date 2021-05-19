<?php

use Binlq0\Muse\Controller\Api\UserController as ApiUserController;
use Binlq0\Muse\Controller\Web\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for this package.
|
*/

Route::resource('users', UserController::class);

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for this package.
|
*/

Route::prefix('api')->name('api.')->group(function () {
    Route::get('users', [ApiUserController::class, 'index']);
});
