@extends('layouts.app')

@section('content')
<div class="card p-4">
    <h1 class="mb-4">Students</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary btn-custom mb-3">➕ Add Student</a>

    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Student Number</th>
                <th>Program</th>
                <th>Year Level</th>
                <th>Email</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td><a href="{{ route('students.show', $student) }}" class="text-decoration-none">{{ $student->user->name }}</a></td>
                <td>{{ $student->student_number }}</td>
                <td>{{ $student->program->name }}</td>
                <td>{{ $student->year_level }}</td>
                
                <td>{{ $student->user->email }}</td>

                <td class="text-center">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm btn-custom">✏️ Edit</a>
                    <form action="{{ route('students.destroy', $student) }}" method="POST" class="d-inline">
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
