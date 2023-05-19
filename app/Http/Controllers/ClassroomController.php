<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     // to do arreglar este controlador
    public function index(Request $request)
    {
    
         $classrooms=Classroom::where('teacher_id', '=', $request->id)->get();
         
         return response()->json(["classrooms"=>$classrooms, "req"=>$request->id]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'group' => 'required|string',
        //     'description' => 'required|string',
        // ]);

        Classroom::create([
            'name' => $request->newClass["name"],
            'group' => $request->newClass["group"],
            'description' => $request->newClass["description"],
            'teacher_id' => $request->newClass["teacher_id"],
        ]);

        return response()->json(["msg"=>"classrrom created successfully"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classroom $classroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classroom $classroom)
    {
        //
    }
}
