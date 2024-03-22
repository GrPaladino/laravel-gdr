<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(__DIR__ . "/../csv/items.csv","r");
        $first_line = true;
        while (!feof($file)) {
            $item_data = fgetcsv($file);
            if (!$first_line) {
                $item = new Item();

                $item->name = $item_data[0];
                $item->slug = $item_data[1];
                $item->category = $item_data[3];
                $item->type = $item_data[2];
                $item->weight = $item_data[4];
                $item->cost = $item_data[5];

                $item->save();
            }

            $first_line = false;
        }
    }
}
