<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\GamesController;

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
Route::redirect('/', '/Admin/Games');

Route::prefix('Admin')->name('Admin.')->group(function(){

    Route::get('/Games', [GamesController::class, 'games'])->name('Games.listar');
    Route::get('/Games/adicionar', [GamesController::class, 'formAdicionar'])->name('Games.form');
    Route::post('/Games/adicionar', [GamesController::class, 'adicionar'])->name('Games.adicionar');


});

Route::get('/sobre', function () {
    return '<h1>Sobre<h1>';
});

