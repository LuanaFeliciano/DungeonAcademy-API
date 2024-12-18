<?php

use App\Http\Controllers\PerguntasController;
use App\Http\Controllers\RankingController;
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
    return view('cadastraPergunta');
});
Route::get('/verPerguntas', [PerguntasController::class, 'visualizarTabela']);
Route::get('/visualizarRanking', [RankingController::class, 'get']);