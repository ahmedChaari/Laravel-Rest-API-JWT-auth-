<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



    Route::post('/login',         [AuthController::class,  'login']);
    Route::post('/register/user', [AuthController::class,  'registerUser']);
    
    Route::post('/create/project', [ProjectController::class,  'storeProject']);
    Route::post('project/task/{id}',[ProjectController::class, 'storeTaskProject']);
    
    Route::post('team/task/{id}',[TeamController::class, 'storeTaskTeam']);
    
    
    Route::get('/tasks',          [TaskController::class,  'listTaks']);
    Route::get('task/{id}',       [TaskController::class, 'showTak']);

    
    // Route::any('{any}', function(){
    //     return response()->json([
    //         'status' => 'error',
    //         'message' => 'Resource not found'], 404);
    // })->where('any', '.*');




 

