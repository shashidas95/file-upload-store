<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/demo/{name}/{age}', [DemoController::class, 'DemoAction']);
// Route::Post('/demo/{email}', [DemoController::class, 'DemoAction']);
Route::Post('/file', [DemoController::class, 'DemoAction']);
Route::Post('/fileupload', [DemoController::class, 'FileUpload']);
Route::Post('/filestore', [DemoController::class, 'FileStore']);

