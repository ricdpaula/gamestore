<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GamesController extends Controller
{
    public function index(){
        $games = Game::query()->orderBy('nome')->get();
        return view('games.index')->with('games', $games);
    }

    public function create(){
        return view('games.create');
    }

    public function edit(Request $request){
        $game = Game::query()->where('id', $request->input('id'))->first();
        return view('games.edit')->with('game', $game);
    }

    public function editing(Request $request){
        $idGame = $request->input('id');
        if (Game::where('id', $idGame)->update(['nome' => $request->input('nome')])) {
            return redirect('/games');
        }else{
            return 'Ocorreu um erro!';
        }
    }

    public function insert(Request $request){
        $nomeGame = $request->input('nome');
        $game = new Game();
        $game->nome = $nomeGame;
        $game->save();
        return redirect('/games');
    }

    public function delete(Request $request){
        $idGame = $request->input('id');
        if (Game::where('id', $idGame)->delete()) {
            return redirect('/games');
        }else{
            return 'Ocorreu um erro!';
        }

    }
}
