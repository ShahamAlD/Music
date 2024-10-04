<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Route::get('/', function() {return view('welcome');});



Route::get('/songs',
    [SongController::class, 'index'])->name('songs.index');

Route::get('/songs/create',
    [SongController::class, 'create'])->name('songs.create');

Route::get('/songs/{song}',
    [SongController::class, 'show'])->name('songs.show');

Route::get('/songs/{song}/edit',
    [SongController::class, 'edit'])->name('songs.edit');
Route::PUT('/songs/{song}',
    [SongController::class, 'update'])->name('songs.update');

Route::POST('/songs',
    [SongController::class, 'store'])->name('songs.store');



Route::Delete('/songs/{song}',
    [SongController::class, 'destroy'])->name('songs.destroy');

