<?php

namespace App\Http\Controllers;
use App\Models\Gamer;
use Illuminate\Http\Request;

class GamerController extends Controller
{

    public function index()
    {
        $gamers = Gamer::all();
        return view('gamers.index', compact('gamers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $gamer = Gamer::find($id);
        return  view('gamers.show', compact('gamer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gamer = Gamer::find($id);
        return view('gamers.edit', compact('gamer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
