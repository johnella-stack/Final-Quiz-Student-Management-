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
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Address</th>
                    <th>DOB</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->fname }}</td>
                    <td>{{ $student->lname }}</td>
                    <td>{{ $student->mname }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->dob }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- BUTTON AT BOTTOM -->
        <div class="mt-3">
            <a href="{{ route('student.index') }}" class="btn btn-info">
                Add New Student
            </a>
        </div>

    </div>
</div>
@endsection