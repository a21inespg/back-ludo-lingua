<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students=Student::where('classroom_id', '=', $request->id)->get();
         
        return response()->json(["students"=>$students, "success"=>true]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // to do seguir aqui esto non se me crea non me chega o request

        Student::create([
            'name' => $request->st["name"],
            'surname' => $request->st["surname"],
            'observations' => $request->st["observations"],
            'classroom_id' => $request->st["classroom_id"],
        ]);

        return response()->json(["msg"=>"Student created successfully", "req"=>$request->st]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
