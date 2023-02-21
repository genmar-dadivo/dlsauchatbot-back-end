<?php

use App\Http\Controllers\API\ChatController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Welcome
Route::get('chat/welcome', [ChatController::class, 'welcome']);
Route::post('chat/welcome', [ChatController::class, 'setName']);


Route::post('chat/ready', [ChatController::class, 'setReady']);

// Exam
Route::get('chat/course', [ChatController::class, 'getCourses']);
Route::get('chat/exam/{course}', [ChatController::class, 'takeExam']);
