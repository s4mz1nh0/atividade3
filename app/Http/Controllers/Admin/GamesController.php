<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\GameRequest;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lista de games';
        $games = Game::orderBy('nome', 'asc')->get();
        $sobre = 'Esse site é dedicado a manter em seu acervo os games mais marcantes já lançados';

        return view('Admin.Games.index', compact('subtitulo', 'games'));//
        return view('Admin.Games.index', compact('subtitulo', 'sobre'));//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('Admin.Games.store');
        return view('Admin.Games.form', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GameRequest $request)
    {
        Game::create($request->all());

       $request->session()->flash('sucesso', "Dados inseridos com sucesso!");

        return redirect()->route('Admin.Games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /* public function show($id)
    {
        //
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::find($id);
        $action = route('Admin.Games.update', $game->id);
        return view('Admin.Games.form', compact('game', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GameRequest $request, $id)
    {
        $game = Game::find($id);
        $game->nome = $request->nome;
        $game->desenvolvedora = $request->desenvolvedora;
        $game->link = $request->link;
        $game->save();

        $request->session()->flash('sucesso', "Dados alterados com sucesso!");
        return redirect()->route("Admin.Games.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Game::destroy($id);
        $request->session()->flash('sucesso', "Dados excluídos com sucesso!");
        return redirect()->route('Admin.Games.index');
    }
}
