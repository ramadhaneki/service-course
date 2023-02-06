<?php

use App\Http\Controllers\ChapterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ImageCourseController;
use App\Http\Controllers\LessonConotroller;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Mentors

Route::get('/mentors', [MentorController::class, 'index']);
Route::get('/mentors/{id}', [MentorController::class, 'show']);
Route::post('/mentors', [MentorController::class, 'create']);
Route::put('/mentors/{id}', [MentorController::class, 'update']);
Route::delete('/mentors/{id}', [MentorController::class, 'destroy']);

// Courses

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::post('/courses', [CourseController::class, 'create']);
Route::put('/courses/{id}', [CourseController::class, 'update']);
Route::delete('/courses/{id}', [CourseController::class, 'destroy']);

// Chapter

Route::get('/chapters', [ChapterController::class, 'index']);
Route::get('/chapters/{id}', [ChapterController::class, 'show']);
Route::post('/chapters', [ChapterController::class, 'create']);
Route::put('/chapters/{id}', [ChapterController::class, 'update']);
Route::delete('/chapters/{id}', [ChapterController::class, 'destroy']);

// Lessons

Route::get('/lessons', [LessonConotroller::class, 'index']);
Route::get('/lessons/{id}', [LessonConotroller::class, 'show']);
Route::post('/lessons', [LessonConotroller::class, 'create']);
Route::put('/lessons/{id}', [LessonConotroller::class, 'update']);
Route::delete('/lessons/{id}', [LessonConotroller::class, 'destroy']);

// Image Courses

Route::post('/image-courses', [ImageCourseController::class, 'create']);
Route::delete('/image-courses/{id}', [ImageCourseController::class, 'destroy']);

// My Courses

Route::post('/my-courses', [MyCourseController::class, 'create']);
Route::post('/my-courses/premium', [MyCourseController::class, 'createPremiumAccess']);
Route::get('/my-courses', [MyCourseController::class, 'index']);

// Reviews

Route::post('/reviews', [ReviewController::class, 'create']);
Route::put('/reviews/{id}', [ReviewController::class, 'update']);
Route::delete('/reviews/{id}', [ReviewController::class, 'destroy']);