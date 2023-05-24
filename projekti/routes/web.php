<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;

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
    return view('welcome');
});
Route::get('/project/create',[ProjectController::class, 'create']);
Route::post('/project',[ProjectController::class, 'save']);
Route::get('/project/{id}', [ProjectController::class, 'getProject']);
Route::put('/project', [ProjectController::class,'update']);
Route::put('/project', [ProjectController::class,'update']);
Route::get('/user', [UserController::class,'index'])->middleware('auth');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
