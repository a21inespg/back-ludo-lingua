<?php

namespace App\Http\Controllers;

use App\Models\GalicianAlphabet;
use App\Models\GramaticalCathegory;
use Illuminate\Http\Request;

class ZombigramaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=GramaticalCathegory::all();
        $alphabet=GalicianAlphabet::all();
        return response()->json(["categories"=>$categories, "alphabet"=>$alphabet]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
