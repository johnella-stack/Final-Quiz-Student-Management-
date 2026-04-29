@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Student Management</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <div class="row">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-6 m-auto">
                <div class="card card-secondary">

                    <div class="card-header">
                        <h3 class="card-title">Add New Student</h3>
                    </div>

                   <form action="{{ route('student.store') }}" method="POST">
                    @csrf

                        <div class="row card-body col-12">

                            <!-- First Name -->
                            <div class="form-group col-12">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter First Name">
                                @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Last Name -->
                            <div class="form-group col-12">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                                @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Middle Name -->
                            <div class="form-group col-12">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="mname" placeholder="Enter Middle Name">
                                @error('mname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Address -->
                            <div class="form-group col-12">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- DOB -->
                            <div class="form-group col-12">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob">
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>

                        <!-- Submit -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success col-12">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>

    </div>
</div>
@endsection