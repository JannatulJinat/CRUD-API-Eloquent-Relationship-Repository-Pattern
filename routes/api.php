<?php

use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\LikeableController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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

Route::apiResource('affiliation', AffiliationController::class);
Route::apiResource('collection', CollectionController::class);
Route::apiResource('like', LikeController::class);
Route::apiResource('post', PostController::class);
Route::apiResource('profile', ProfileController::class);
Route::apiResource('series', SeriesController::class);
Route::apiResource('tag', TagController::class);
Route::apiResource('user', UserController::class);
Route::apiResource('video', VideoController::class);
Route::apiResource('likeable', LikeableController::class);
Route::apiResource('postTag', LikeableController::class);
