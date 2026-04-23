@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>STUDENT DETAILS</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <div style="margin-bottom: 2rem;">
            <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">FULL NAME</label>
            <p style="font-size: 1.2rem; color: var(--fg);">{{ $student->name }}</p>
        </div>

        <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">EMAIL</label>
                <p>{{ $student->email }}</p>
            </div>
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">PHONE</label>
                <p>{{ $student->phone ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">BATCH</label>
                <p>{{ $student->danceClass ? $student->danceClass->name : 'N/A' }}</p>
            </div>
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">STATUS</label>
                <p>{{ ucfirst($student->status) }}</p>
            </div>
        </div>

        <div style="margin-bottom: 2rem;">
            <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">NOTES</label>
            <p>{{ $student->notes ?? 'No notes available.' }}</p>
        </div>

        <div style="margin-top: 2rem;">
            <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-dark" style="padding: 0.8rem 2rem;">EDIT</a>
            <a href="{{ route('admin.students.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">BACK TO LIST</a>
        </div>
    </div>
@endsection
