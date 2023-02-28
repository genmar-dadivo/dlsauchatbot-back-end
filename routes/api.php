<?php

use App\Http\Controllers\API\ChatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TalkController;
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


// Login
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);

// Welcome
Route::get('chat/welcome', [ChatController::class, 'welcome']);
Route::post('chat/welcome', [ChatController::class, 'setName']);


Route::post('chat/ready', [ChatController::class, 'setReady']);

// Exam
Route::get('chat/course', [ChatController::class, 'getCourses']);
Route::get('chat/exam/{course}', [ChatController::class, 'takeExam']);
Route::post('chat/exam/', [ChatController::class, 'computeExam']);

// Department/ Group
Route::post('group/add', [GroupController::class, 'store']);
Route::post('group/delete/{group}', [GroupController::class, 'destroy']);
Route::get('group/{group}', [GroupController::class, 'filter']);

// Default Messages
// Welcome
Route::get('talk/welcome', [TalkController::class, 'index']);
Route::get('talk/welcome/delete/{id}', [TalkController::class, 'destroy']);
Route::post('talk/welcome/add', [TalkController::class, 'store']);

// Greeting
Route::get('talk/greeting', [TalkController::class, 'gindex']);
Route::get('talk/greeting/delete/{id}', [TalkController::class, 'gdestroy']);
Route::post('talk/greeting/add', [TalkController::class, 'gstore']);

Route::post('question/add', [QuestionController::class, 'store']);
Route::get('question/delete/{id}', [QuestionController::class, 'destroy']);
Route::get('question/{id}', [QuestionController::class, 'show']);
Route::post('question/update', [QuestionController::class, 'update']);

