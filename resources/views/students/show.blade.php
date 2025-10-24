@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Student Details</h1>
    <div class="row">
        <div class="col-md-6">
            <h5>Personal Information</h5>
            <p><strong>Full Name:</strong> {{ $student->user->name }}</p>
            <p><strong>First Name:</strong> {{ $student->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
            <p><strong>Email:</strong> {{ $student->user->email }}</p>
        </div>
        <div class="col-md-6">
            <h5>Academic Information</h5>
            <p><strong>Student Number:</strong> {{ $student->student_number }}</p>
            <p><strong>Program:</strong> {{ $student->program->name }}</p>
            <p><strong>Year Level:</strong> {{ $student->year_level }}</p>
        </div>
    </div>
    <a href="{{ route('students.index') }}" class="btn btn-secondary btn-custom mt-3">⬅️ Back to Students</a>
</div>
@endsection
