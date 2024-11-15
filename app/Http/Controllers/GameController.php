<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }
    public function create()
    {
        return view('games.create');
    }
    public function store(Request $request)
    {
        $game  = new Game();
        $game->name = $request->input('name');
        $game->save();

        return redirect()->route('games.index')->with('success', "{$game->name} sikeresen létrehozva");
    }
    public function show(string $id)
    {
        $game = Game::find($id);
        return view('games.show', compact('game'));
    }
    public function edit(string $id)
    {
        $game = Game::find($id);
        return view('games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game  = Game::find($id);
        $game->name = $request->input('name');
        $game->release = $request->input('release');
        $game->save();

        return redirect()->route('games.index')->with('success', "{$game->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::find($id);
        $game->delete();
        return redirect()->route('games.index')->with('success', "Sikeresen törölve");
    }
}
