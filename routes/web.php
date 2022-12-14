<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

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

Route::get('/task', function () {
    return view('task.index');
})->name('task.index');

Route::post('/task', [TaskController::class, 'store']);

Route::get('/task/create', function () {
    return view('task.create');
});

Route::get('/get-tasks', function () {
    $tasks = Task::all()->pluck('description');
    return $tasks;
});
