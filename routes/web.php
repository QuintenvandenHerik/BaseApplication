<?php

use App\Http\Controllers\ModulesController;
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

Route::controller(ModulesController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index')->name('dashboard');
    Route::get('/modules/create', 'create')->name('modules.create');
    Route::post('/modules', 'store')->name('modules.store');
    Route::get('/modules/{module}', 'show')->name('modules.show');
    Route::get('/modules/{module}/edit', 'show')->name('modules.edit');
    Route::put('/modules/{module}', 'show')->name('modules.update');
    Route::delete('/modules/{module}', 'show')->name('modules.destroy');
});

require __DIR__.'/auth.php';
