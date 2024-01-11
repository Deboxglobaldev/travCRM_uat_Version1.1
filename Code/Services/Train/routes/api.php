<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//===============================TRAIN CONTROLLERS============================
use App\Http\Controllers\Master\TrainRateMasterController;
use App\Http\Controllers\Master\SearchTrainRateController;
use App\Http\Controllers\Master\FilterTrainRateController;
//===============================END HERE===================================

//===============================TRAIN CONTROLLERS============================
Route::post('/searchtrainrate',[SearchTrainRateController::class,'index']);
Route::post('/filtertrainrate',[FilterTrainRateController::class,'index']);
Route::post('/addupdatetrainratemaster',[TrainRateMasterController::class,'store']);
Route::post('/trainratemasterlist',[TrainRateMasterController::class,'index']);
//===============================END HERE===================================




















































































































/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
