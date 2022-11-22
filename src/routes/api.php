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

// ADRのルーティング
// 指定したクラスの __invoke() が呼び出されるためメソッドの指定が不要になる
Route::get('/sample/json', \App\Http\Actions\SampleJsonAction::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
