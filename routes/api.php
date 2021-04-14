<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group([
    'excluded_middleware' => ['auth'],
], function () {
Route::put('/table/addRoom', [App\Http\Controllers\TableController::class, 'addRoom']);
Route::get('/table/show/{id}', [App\Http\Controllers\TableController::class, 'show']);
Route::put('/table/reset/{id}', [App\Http\Controllers\TableController::class, 'reset']);
Route::put('/table/random/{id}', [App\Http\Controllers\TableController::class, 'randomStore']);
Route::post('/table/setTeams/{id}', [App\Http\Controllers\TableController::class, 'setTeams']);
Route::delete('/table/delLast', [App\Http\Controllers\TableController::class, 'delLastRoom']);
Route::post('/table/updateCup', [App\Http\Controllers\TableController::class, 'updateCup']);

Route::get('/tables', [App\Http\Controllers\TableController::class, 'fetchAllTables']);

Route::post('/leaderboard/addWinner', [App\Http\Controllers\LeaderboardController::class, 'addWinner']);
Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'index']);

Route::post('/team/create', [App\Http\Controllers\TeamController::class, 'store']);
Route::get('/teams', [App\Http\Controllers\TeamController::class, 'index']);

});
