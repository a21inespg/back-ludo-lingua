<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GramaticalCathegorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            ['name' => "Adxectivo"],
            ['name' => "Substantivo"],
            ['name' => "Verbo"]
           
        ];

        DB::table('gramatical_cathegories')->insert($data);
    }
}
