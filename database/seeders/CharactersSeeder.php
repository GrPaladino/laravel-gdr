<?php

namespace Database\Seeders;

use App\Models\Characters;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personaggi = config('characters');

        foreach ($personaggi['characters'] as $personaggio) {

            $character = new Characters;
            $character->name = $personaggio['name'];
            $character->type_id = $personaggio['type_id'];
            $character->description = $personaggio['description'];
            $character->strength = $personaggio['strength'];
            $character->defence = $personaggio['defence'];
            $character->intelligence = $personaggio['intelligence'];
            $character->speed = $personaggio['speed'];
            $character->life = $personaggio['life'];
            $character->save();

        }
    }
}
