<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function games(){

    $subtitulo = 'Lista de games';

    $games = Game::all();

    $sobre = 'Esse site é dedicado a manter em seu acervo os games mais marcantes já lançados';


    return view('Admin.Games.index', compact('subtitulo', 'games','sobre'));//
}
}
