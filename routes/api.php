<?php

use App\Http\Controllers\PonenteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('admin')->middleware(['auth:sanctum', 'verified', 'is_admin'])->group(function () {

    Route::apiResource('/ponentes', PonenteController::class);

});

