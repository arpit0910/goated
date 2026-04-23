@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE TESTIMONIALS</h2>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-dark" style="padding: 0.8rem 2rem; font-size: 0.7rem;">+ ADD NEW TESTIMONIAL</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->student_name }}</td>
                        <td>{{ Str::limit($testimonial->content, 80) }}</td>
                        <td>{{ $testimonial->is_published ? 'Published' : 'Draft' }}</td>
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="action-btn btn-edit">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this testimonial?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO TESTIMONIALS ADDED YET</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
