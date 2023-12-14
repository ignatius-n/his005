<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\PatientController;
use App\Models\Appointment;
use App\Models\County;
use App\Models\Gender;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    Route::apiResource('county', CountyController::class);
    Route::apiResource('gender', GenderController::class);
    Route::apiResource('patient', PatientController::class);
    Route::apiResource('appointment', AppointmentController::class);
});

