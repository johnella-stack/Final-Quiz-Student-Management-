@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Student Update</h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-6 m-auto">
                <div class="card card-secondary">

                    <div class="card-header">
                        <h3 class="card-title">Edit Student Information</h3>
                    </div>

                    <form action="{{ route('student.update', $student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row card-body col-12">

                            <!-- First Name -->
                            <div class="form-group col-12">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname"
                                    value="{{ $student->fname }}" required>
                                @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>



                            <!-- Middle Name -->
                            <div class="form-group col-12">
                                <label>Middle Name</label>
                                <input type="text" class="form-control" name="mname"
                                    value="{{ $student->mname }}">
                                @error('mname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            
                            <!-- Last Name -->
                            <div class="form-group col-12">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname"
                                    value="{{ $student->lname }}">
                                @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                

                            <!-- Address -->
                            <div class="form-group col-12">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address"
                                    value="{{ $student->address }}">
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <!-- Date of Birth -->
                            <div class="form-group col-12">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob"
                                    value="{{ $student->dob }}">
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success col-12">
                                Update
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection