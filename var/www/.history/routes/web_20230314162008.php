<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\folderController;
use App\Http\Controllers\foldercreateController;
use App\Http\Controllers\taskcreateController;

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

Route::get('/', function () {
    return view('layout');
});

Route::resource('folder/{id}/list', folderController::class)->only([
    'index',
]);

Route::resource('folder', foldercreateController::class);

Route::get('folder/{id}/task/create', 'taskscreateController@showCreateForm');
Route::post('folder/{id}/task/create', 'taskscreateController@create');
