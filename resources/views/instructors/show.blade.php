@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Instructor Details</h1>
    <div class="row">
        <div class="col-md-6">
            <h5>Personal Information</h5>
            <p><strong>Full Name:</strong> {{ $instructor->user->name }}</p>
            <p><strong>First Name:</strong> {{ $instructor->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $instructor->last_name }}</p>
            <p><strong>Email:</strong> {{ $instructor->user->email }}</p>
        </div>
        <div class="col-md-6">
            <h5>Professional Information</h5>
            <p><strong>Employee Number:</strong> {{ $instructor->employee_number }}</p>
            <p><strong>Department:</strong> {{ $instructor->department }}</p>
        </div>
    </div>
    <a href="{{ route('instructors.index') }}" class="btn btn-secondary btn-custom mt-3">⬅️ Back to Instructors</a>
</div>
@endsection
