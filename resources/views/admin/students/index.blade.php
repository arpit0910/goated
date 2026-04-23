@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE STUDENTS</h2>
        <a href="{{ route('admin.students.create') }}" class="btn btn-dark" style="padding: 0.8rem 2rem; font-size: 0.7rem;">+ ADD STUDENT</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Class</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->danceClass ? $student->danceClass->name : 'N/A' }}</td>
                        <td>{{ ucfirst($student->status) }}</td>
                        <td>
                            <a href="{{ route('admin.students.edit', $student) }}" class="action-btn btn-edit">Edit</a>
                            <form action="{{ route('admin.students.destroy', $student) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO STUDENTS REGISTERED YET</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
