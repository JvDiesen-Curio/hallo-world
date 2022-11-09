<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/projects', [ProjectController::class, 'index']);

Route::get('/projects/create', [ProjectController::class, 'create']);
Route::post('/projects/create', [ProjectController::class, 'store']);

Route::get('/projects/edit/{project}', [ProjectController::class, 'edit']);
Route::put('/projects/edit/{project}', [ProjectController::class, 'update']);

Route::get("/project/{project}", [ProjectController::class, 'show']);

Route::get("/project/delete/{project}", [ProjectController::class, 'delete']);
Route::delete('/project/delete/{project}', [ProjectController::class, 'deleteProject']);
