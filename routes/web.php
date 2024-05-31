<?php

use App\Http\Controllers\Taskcontroller;
use Illuminate\Support\Facades\Route;

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

// route untuk menampilkan hal daftar tugas
Route::get('/tasks', [Taskcontroller::class, 'index']);
Route::get('/tasks/{id}', [Taskcontroller::class, 'show'])->name('tasks.show');
