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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('folders/create', [foldercreateController::class, 'showCreateForm'])->name('folders.create');
    Route::post('folders/create', [foldercreateController::class, 'create']);

    Route::get('folders/{folder}/tasks/create', [taskscreateController::class, 'showCreateForm'])->name('tasks.create');
    Route::post('folders/{folder}/tasks/create', [taskscreateController::class, 'create']);

    Route::get('folders/{folder}/tasks/{task}/edit', [taskscreateController::class, 'showEditForm'])->name('tasks.edit');
    Route::post('folders/{folder}/tasks/{task}/edit', [taskscreateController::class, 'edit']);

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

// 認証機能
Auth::routes();
