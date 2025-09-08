@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>

    @if($students->isEmpty())
        <p>No students found.</p>
    @else
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
