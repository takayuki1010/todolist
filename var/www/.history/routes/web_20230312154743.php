<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\folderController;
use App\Http\Controllers\tasksfolderController;
use Resources\Views\Folders\create;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('folder');
// });

Route::resource('folder/{id}/list', folderController::class);

Route::resource('folders', tasksfolderController::class);
