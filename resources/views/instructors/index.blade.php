@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Instructors</h1>
    <a href="{{ route('instructors.create') }}" class="btn btn-primary btn-custom mb-3">➕ Add Instructor</a>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Employee Number</th>
                <th>Department</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructors as $instructor)
            <tr>
                <td>{{ $instructor->id }}</td>
                <td>{{ $instructor->employee_number }}</td>
                <td>{{ $instructor->department }}</td>
                <td><a href="{{ route('instructors.show', $instructor) }}" class="text-decoration-none">{{ $instructor->first_name }}</a></td>
                <td>{{ $instructor->last_name }}</td>
                <td>{{ $instructor->user->email }}</td>
                <td class="text-center">
                    <a href="{{ route('instructors.edit', $instructor) }}" class="btn btn-warning btn-sm btn-custom">✏️ Edit</a>
                    <form action="{{ route('instructors.destroy', $instructor) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm btn-custom">🗑️ Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
