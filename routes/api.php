<?php

use App\Http\Controllers\Api\V1\TaskController;
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
// Route::Post('/demo/{email}', [DemoController::class, 'DemoAction']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('v1')->group(function()
{
   Route::apiResource("/tasks", TaskController::class);
});

// Route::Post('/file', [DemoController::class, 'DemoAction']);
// Route::Post('/fileupload', [DemoController::class, 'FileUpload']);
// Route::Post('/filestore', [DemoController::class, 'FileStore']);
