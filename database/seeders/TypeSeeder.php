<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Type::truncate();
       $csvFile = fopen(base_path("database/data/types.csv"), "r");
       $firstline = true;
       while(($data = fgetcsv($csvFile, 2000, ","))!== FALSE) {
            if(!$firstline) {
                Type::create([
                    "name" => $data[0],
                    "img" => $data[1],
                    "description" => $data[2]
                ]);
            }
            $firstline = false;
       }
       fclose($csvFile); 
    }
}
