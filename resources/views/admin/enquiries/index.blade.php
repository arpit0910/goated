@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE ENQUIRIES</h2>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class Interest</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($enquiries as $enquiry)
                    <tr>
                        <td style="font-size: 0.7rem; color: var(--dim);">{{ $enquiry->created_at->format('M d, Y') }}</td>
                        <td>{{ $enquiry->name }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ $enquiry->danceClass ? $enquiry->danceClass->name : 'General' }}</td>
                        <td>
                            <a href="{{ route('admin.enquiries.show', $enquiry) }}" class="action-btn btn-edit">View</a>
                            <form action="{{ route('admin.enquiries.destroy', $enquiry) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this enquiry?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO ENQUIRIES RECEIVED YET</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
