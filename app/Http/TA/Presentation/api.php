<?php

use App\Http\TA\Presentation\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('topik')->group(function (){
    Route::post('create', [ProfileController::class, 'createTopik']);
    Route::post('update', [ProfileController:class, 'updateTopik']);
});