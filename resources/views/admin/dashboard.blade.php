@extends('layouts.admin')

@section('content')
    <h2 style="margin-bottom: 3rem;">SYSTEM OVERVIEW</h2>

    <div class="grid" style="grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); margin-top: 0;">
        <div class="stat-card">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <div class="corner-mark mark-bl"></div>
            <div class="corner-mark mark-br"></div>
            <h4 style="color: var(--dim);">TOTAL STUDENTS</h4>
            <p style="font-size: 2.5rem; color: var(--fg); font-weight: 800;">{{ $stats['students'] }}</p>
        </div>
        <div class="stat-card">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <div class="corner-mark mark-bl"></div>
            <div class="corner-mark mark-br"></div>
            <h4 style="color: var(--dim);">ACTIVE BATCHES</h4>
            <p style="font-size: 2.5rem; color: var(--fg); font-weight: 800;">{{ $stats['classes'] }}</p>
        </div>
        <div class="stat-card">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <div class="corner-mark mark-bl"></div>
            <div class="corner-mark mark-br"></div>
            <h4 style="color: var(--dim);">NEW ENQUIRIES</h4>
            <p style="font-size: 2.5rem; color: var(--fg); font-weight: 800;">{{ $stats['enquiries'] }}</p>
        </div>
        <div class="stat-card">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <div class="corner-mark mark-bl"></div>
            <div class="corner-mark mark-br"></div>
            <h4 style="color: var(--dim);">GALLERY ASSETS</h4>
            <p style="font-size: 2.5rem; color: var(--fg); font-weight: 800;">{{ $stats['gallery'] }}</p>
        </div>
    </div>

    <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 4rem; padding: 0;">
        <div class="card" style="padding: 2rem;">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <h3 style="margin-bottom: 2rem; font-size: 0.9rem;">RECENT ENQUIRIES</h3>
            <div class="table-container" style="margin-top: 0; border: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentEnquiries as $enquiry)
                            <tr>
                                <td>{{ $enquiry->name }}</td>
                                <td style="font-size: 0.7rem; color: var(--dim);">{{ $enquiry->created_at->format('M d') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('admin.enquiries.index') }}" style="display: block; margin-top: 1.5rem; font-size: 0.7rem; color: var(--dim);">VIEW ALL ENQUIRIES</a>
        </div>

        <div class="card" style="padding: 2rem;">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <h3 style="margin-bottom: 2rem; font-size: 0.9rem;">NEW STUDENTS</h3>
            <div class="table-container" style="margin-top: 0; border: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentStudents as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td style="font-size: 0.7rem;">{{ ucfirst($student->status) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{ route('admin.students.index') }}" style="display: block; margin-top: 1.5rem; font-size: 0.7rem; color: var(--dim);">VIEW ALL STUDENTS</a>
        </div>
    </div>

    <div style="margin-top: 4rem;">
        <h3>QUICK ACTIONS</h3>
        <div style="display: flex; gap: 1rem; margin-top: 2rem;">
            <a href="{{ route('admin.classes.create') }}" class="btn btn-dark" style="padding: 1rem 2rem; font-size: 0.8rem;">Add New Class</a>
            <a href="{{ route('admin.gallery.create') }}" class="btn" style="padding: 1rem 2rem; font-size: 0.8rem;">Upload to Gallery</a>
        </div>
    </div>
@endsection
