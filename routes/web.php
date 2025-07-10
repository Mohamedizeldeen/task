<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Task as ControllersTask;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', [ControllersTask::class, 'showAllTask'])->name('home');

Route::post('/', [ControllersTask::class,"addTask"])->name('user.post');

Route::fallback(function () {
    return view('404');
})->name('fallback');

Route::get('/task/{id}', [ControllersTask::class,'showTask'])->name('task.show');
Route::delete('/task/{id}', [ControllersTask::class,'deleteTask'])->name('task.delete');
Route::get('/task/{id}/edit', [ControllersTask::class,'showForEdit'])->name('task.showForEdit');
Route::put('/task/{id}/edit', [ControllersTask::class,'updateTask'])->name('task.update');