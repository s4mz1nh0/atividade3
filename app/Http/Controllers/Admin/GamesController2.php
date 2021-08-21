<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use App\Models\Game;

class GamesController extends Controller
{
    public function games(){

    $subtitulo = 'Lista de games';

    $games = Game::all();

    $sobre = 'Esse site é dedicado a manter em seu acervo os games mais marcantes já lançados';


    return view('Admin.Games.index', compact('subtitulo', 'games'));//
    return view('Admin.Games.index', compact('subtitulo', 'sobre'));//

}

    public function formAdicionar()
    {
        $action = route('Admin.Games.adicionar');
        return view('Admin.Games.form', compact('action'));
    }

    public function adicionar(GameRequest $request)
    {

        //$request->validate([
        //    'nome' => 'bail|required|min:2|max:100'
     //   ]);

        Game::create($request->all());

       $request->session()->flash('sucesso', "Dados inseridos com sucesso!");

        return redirect()->route('Admin.Games.listar');

    }

    public function deletar($id, Request $request)
    {
        Game::destroy($id);
        $request->session()->flash('sucesso', "Dados excluídos com sucesso!");
        return redirect()->route('Admin.Games.listar');
    }
    public function formEditar($id)
    {
        $game = Game::find($id);
        $action = route('Admin.Games.editar', $game->id);
        return view('Admin.Games.form', compact('game', 'action'));
    }

    public function editar(GameRequest $request, $id)
    {
        $game = Game::find($id);
        $game->nome = $request->nome;
        $game->desenvolvedora = $request->desenvolvedora;
        $game->link = $request->link;
        $game->save();

        $request->session()->flash('sucesso', "Dados alterados com sucesso!");
        return redirect()->route("Admin.Games.listar");
    }
}
