<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\folderController;
use App\Http\Controllers\foldercreateController;
use App\Http\Controllers\taskscreateController;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class, 'index')->name('home');

Route::resource('folder/{id}/list', folderController::class)->only([
    'index',
]);

Route::resource('folder', foldercreateController::class);

Route::get('folder/{id}/task/create', [taskscreateController::class, 'showCreateForm'])->name('tasks.create');
Route::post('folder/{id}/task/create', [taskscreateController::class, 'create']);

Route::get('folder/{id}/task/{task_id}/edit', [taskscreateController::class, 'showEditForm'])->name('tasks.edit');
Route::post('folder/{id}/task/{task_id}/edit', [taskscreateController::class, 'edit']);
