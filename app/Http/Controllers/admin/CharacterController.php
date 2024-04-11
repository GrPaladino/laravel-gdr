<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Character;
use App\Models\Item;
use Doctrine\DBAL\Driver\Mysqli\Initializer\Charset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;


class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::paginate(10);

        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $items = Item::all();

        return view('admin.characters.create', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(StoreCharacterRequest $request)
    {
        $data = $request->all();
        $character = new Character;
        $character->fill($data);
        $character->save();

        if (Arr::exists($data, 'items')) {
            $character->items()->sync($data['items']);
        }


        return redirect()->route('admin.characters.show', compact('character'))->with('message-class', 'alert-success')->with('message', 'Personaggio inserito correttamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $characters
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $characters
     */
    public function edit(Character $character)
    {
        $items = Item::all();

        return view('admin.characters.edit', compact('character', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $characters
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->all();
        $character->update($data);

        if (Arr::exists($data, 'items')) {
            $character->items()->sync($data['items']);
        } else {
            $character->items()->detach();
        }
        return redirect()->route('admin.characters.show', $character)->with('message-class', 'alert-success')->with('message', 'Personaggio modificato correttamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $characters
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('message-class', 'alert-danger')->with('message', 'Personaggio eliminato correttamente.');

    }
}
