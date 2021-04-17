<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::group(['prefix' => 'users'], function () {
    Route::group(['as' => 'users'], function () {
//        Route::get('','User\UserController@index')->name('.index');
        Route::get('', [UserController::class, 'index'])->name('.index');
        Route::get('/list', [UserController::class, 'list'])->name('.list');
    });
});
//Route::get('/users', [\App\Http\Controllers\User\UserController::class, 'index']);
