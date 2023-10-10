<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'authv2'
], function () {
    Route::post('login', [App\Http\Controllers\Authv2\AuthController::class, 'login']); 

    Route::get('login', function () {
        return response()->json(['error' => 'unauthenticated']);
    })->name('login');
        
        
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [App\Http\Controllers\Authv2\AuthController::class, 'logout']);
        Route::get('test', [App\Http\Controllers\Test\TestController::class, 'index']); 
    });
});
