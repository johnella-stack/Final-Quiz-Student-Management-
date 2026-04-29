<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\studentmngt;

class StudentController extends Controller
{
    public function index()
{
    $students = Student::latest()->get();
    return view('student.index', compact('students'));
}

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'bday' => ['required', 'date'],
            'address' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:20'],
        ]);

        Student::create($validated);

        return redirect()
            ->route('student.index')
            ->with('status', 'Student created successfully!');
    }
}