<?php

namespace App\Http\Controllers;

use App\Clip;
use App\Game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ClipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clips.index');
    }


    public function trending()
    {
        $clips = Clip::orderByDesc('rating')->limit(15)->get();

        return view('clips.trending', compact('clips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $games = Game::all();

        return view('clips.create', compact('games'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'url' => 'required',
            'game_id' => 'required|exists:games,id',
        ]);

        Auth::user()->clips()->create($request->all());

        return redirect()->route('clips')->with('status', 'Your clip was successfully submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $clip = Clip::findOrFail($id);

        if ($clip->user_id == Auth::id())
            $clip->delete();

        return redirect()->route('clips')->with('status', 'Your clip was successfully deleted!');
    }
}
