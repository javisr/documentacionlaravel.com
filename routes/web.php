<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocsController;

Route::get('/', [DocsController::class, 'showRootPage']);
Route::get('docs', [DocsController::class, 'showRootPage']);

Route::get('docs/{version}/index.json', [DocsController::class, 'index']);
Route::get('docs/{version}/{page?}', [DocsController::class, 'show'])->name('docs.version');

Route::get('/'.config('indexnow.key').'.txt', fn() => config('indexnow.key'));