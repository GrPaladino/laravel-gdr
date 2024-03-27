<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Doctrine\DBAL\Driver\Mysqli\Initializer\Charset;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Characters::all();

        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $character = new Characters;
        $character->fill($data);
        $character->save();
        return redirect()->route('characters.show', compact('character'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit(Characters $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characters $character)
    {
        $data = $request->all();
        $character->update($data);
        return redirect()->route('characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characters $characters)
    {
        //
    }
}
