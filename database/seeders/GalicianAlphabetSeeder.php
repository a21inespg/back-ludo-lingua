<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalicianAlphabetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            ['letra' => "a"],
            ['letra' => "b"],
            ['letra' => "c"],
            ['letra' => "d"],
            ['letra' => "e"],
            ['letra' => "f"],
            ['letra' => "g"],
            ['letra' => "h"],
            ['letra' => "i"],
            ['letra' => "l"],
            ['letra' => "m"],
            ['letra' => "n"],
            ['letra' => "ñ"],
            ['letra' => "o"],
            ['letra' => "p"],
            ['letra' => "q"],
            ['letra' => "r"],
            ['letra' => "s"],
            ['letra' => "t"],
            ['letra' => "u"],
            ['letra' => "v"],
            ['letra' => "x"],
            ['letra' => "z"]
        ];

        DB::table('galician_alphabets')->insert($data);
    }
}
