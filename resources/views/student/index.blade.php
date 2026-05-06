@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Student Management</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <table class="table">
            <thead>
                <tr>
                    
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                  
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->mname }}</td>
                    <td>{{ $student->lname }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>

                     <td>
                                    <a href="{{ route('student.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>

                                    <form action="{{ route('student.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- BUTTON AT BOTTOM -->
        <div class="mt-3">
            <a href="{{ route('student.create') }}" class="btn btn-info">
                Add New Student
            </a>
        </div>

    </div>
</div>
@endsection