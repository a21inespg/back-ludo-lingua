<?php

namespace Database\Seeders;

use App\Models\GalicianAlphabet;
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

        GalicianAlphabet::create(['letra' => 'a']);
        GalicianAlphabet::create(['letra' => 'b']);
        GalicianAlphabet::create(['letra' => 'c']);
        GalicianAlphabet::create(['letra' => 'd']);
        GalicianAlphabet::create(['letra' => 'e']);
        GalicianAlphabet::create(['letra' => 'f']);
        GalicianAlphabet::create(['letra' => 'g']);
        GalicianAlphabet::create(['letra' => 'h']);
        GalicianAlphabet::create(['letra' => 'i']);
        GalicianAlphabet::create(['letra' => 'l']);
        GalicianAlphabet::create(['letra' => 'm']);
        GalicianAlphabet::create(['letra' => 'n']);
        GalicianAlphabet::create(['letra' => 'ñ']);
        GalicianAlphabet::create(['letra' => 'o']);
        GalicianAlphabet::create(['letra' => 'p']);
        GalicianAlphabet::create(['letra' => 'q']);
        GalicianAlphabet::create(['letra' => 'r']);
        GalicianAlphabet::create(['letra' => 's']);
        GalicianAlphabet::create(['letra' => 't']);
        GalicianAlphabet::create(['letra' => 'u']);
        GalicianAlphabet::create(['letra' => 'v']);
        GalicianAlphabet::create(['letra' => 'x']);
        GalicianAlphabet::create(['letra' => 'z']);
    }
}
