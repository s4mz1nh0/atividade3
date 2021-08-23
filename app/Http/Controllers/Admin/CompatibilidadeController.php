<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Sistema;
use App\Models\Arquitetura;
use App\Models\Compatibilidade;
use App\Http\Requests\CompatibilidadeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompatibilidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compatibilidade = Compatibilidade::with(['game','sistema','arquitetura'])->get();
        return view('Admin.Compatibilidades.index', compact('compatibilidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game = Game::all();
        $sistema = Sistema::all();
        $arquitetura = Arquitetura::all();
        $compatibilidade = Compatibilidade::all();
        $action = route('Admin.Compatibilidades.store');
        return view('Admin.Compatibilidades.form', compact('action', 'game', 'sistema', 'arquitetura'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompatibilidadeRequest $request)
    {
        DB::beginTransaction();
        $compatibilidade = Compatibilidade::create($request->all());
        DB::Commit();

        $request->session()->flash('sucesso', "Dados de compatibilidade inseridos com sucesso!");
        return redirect()->route('Admin.Compatibilidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compatibilidade = Compatibilidade::find($id);

        return view('Admin.Compatibilidades.show', compact('compatibilidade'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function edit($id)
    {

        $compatibilidade = Compatibilidade::find($id);

        $game = Game::all();
        $sistema = Sistema::all();
        $arquitetura = Arquitetura::all();

        $action = route('Admin.Compatibilidades.update', $compatibilidade->id);
        return view('Admin.Compatibilidades.form', compact('compatibilidade','action', 'game', 'sistema', 'arquitetura'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompatibilidadeRequest $request, $id)
    {
        DB::beginTransaction();
        $compatibilidade = Compatibilidade::find($id);


        $compatibilidade -> update ($request->all());
        DB::Commit();

        $request->session()->flash('sucesso', "Dados de compatibilidade atualizados com sucesso!");
        return redirect()->route('Admin.Compatibilidades.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        $compatibilidade = Compatibilidade::find($id);
        DB::beginTransaction();
        $compatibilidade->delete();
        DB::Commit();

        $request->session()->flash('sucesso', "Dados excluidos com sucesso!");
        return redirect()->route('Admin.Compatibilidades.index');
    }
}
