<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeecontroller extends Controller
{
    public function index()
    {
        $employees = employee::query()->latest('id')->get();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:20'],
        ]);

        employee::create($validated);

        return redirect()
            ->route('employee.index')
            ->with('status', 'Employee created successfully!');
    }

    public function edit(int $id)
    {
        $employee = employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'midname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:20'],
        ]);

        $employee = employee::findOrFail($id);
        $employee->update($validated);

        return redirect()->back()->with('status', 'Employee Updated Successfully!');
    }

    public function destroy(int $id)
    {
        $employee = employee::findOrFail($id);
        $employee->delete();

        return redirect()->back()->with('status', 'Employee Deleted');
    }
}