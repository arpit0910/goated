@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>ENQUIRY DETAILS</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <div style="margin-bottom: 2rem;">
            <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.5rem; letter-spacing: 2px;">FROM</label>
            <p style="font-size: 1.2rem; color: var(--fg); font-weight: 700;">{{ $enquiry->name }}</p>
            <p style="color: var(--dim);">{{ $enquiry->email }} | {{ $enquiry->phone ?? 'No phone provided' }}</p>
        </div>

        <div style="margin-bottom: 2rem;">
            <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.5rem; letter-spacing: 2px;">SUBJECT</label>
            <p style="font-size: 1.1rem; color: var(--fg);">{{ $enquiry->subject ?? 'General Enquiry' }}</p>
        </div>

        <div style="margin-bottom: 3rem;">
            <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.5rem; letter-spacing: 2px;">MESSAGE</label>
            <div style="background: #111; border: 1px solid var(--border); padding: 1.5rem; color: #fff; line-height: 1.6;">
                {{ $enquiry->message }}
            </div>
        </div>

        <div style="display: flex; gap: 1rem;">
            <a href="mailto:{{ $enquiry->email }}" class="btn btn-dark" style="padding: 1rem 2rem; font-size: 0.8rem;">REPLY BY EMAIL</a>
            <a href="{{ route('admin.enquiries.index') }}" style="display: flex; align-items: center; color: var(--dim); text-decoration: none; font-size: 0.8rem; margin-left: 1rem;">BACK TO LIST</a>
        </div>
    </div>
@endsection
