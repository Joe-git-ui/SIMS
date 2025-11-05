<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
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
Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('api-programs', ProgramController::class);
    Route::apiResource('api-courses', CourseController::class);
    Route::apiResource('api-students', StudentController::class);
    Route::apiResource('api-instructors', InstructorController::class);
    Route::apiResource('api-enrollments', EnrollmentController::class);
    Route::apiResource('api-grades', GradeController::class);
});
