<?php

namespace Database\Seeders;

use App\Models\GramaticalCathegory;
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

        GramaticalCathegory::create(['name' => 'Adxectivo']);
        GramaticalCathegory::create(['name' => 'Substantivo']);
        GramaticalCathegory::create(['name' => 'Verbo']);
    }
}
