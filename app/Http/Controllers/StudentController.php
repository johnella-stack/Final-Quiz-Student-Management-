<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class studentcontroller extends Controller
{
    public function index()
    {
    $students = Student::query()->latest('id')->get();
    return view('student.index', compact('students'));  
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        student::create($validated);

        return redirect()
            ->route('student.index')
            ->with('status', 'student created successfully!');
    }

    public function edit(int $id)
    {
        $student = student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        $student = student::findOrFail($id);
        $student->update($validated);

        return redirect()->back()->with('status', 'student Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $student = student::findOrFail($id);
        $student->delete();

        return redirect()->back()->with('status', 'student Deleted');
    }
}