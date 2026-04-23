@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>EDIT STUDENT DETAILS</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <form action="{{ route('admin.students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">FULL NAME</label>
                    <input type="text" name="name" value="{{ old('name', $student->name) }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                </div>
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">EMAIL ADDRESS</label>
                    <input type="email" name="email" value="{{ old('email', $student->email) }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                </div>
            </div>

            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">PHONE NUMBER</label>
                    <input type="text" name="phone" value="{{ old('phone', $student->phone) }}" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                </div>
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">DANCE BATCH</label>
                    <select name="dance_class_id" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                        <option value="">SELECT A CLASS</option>
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}" {{ (old('dance_class_id', $student->dance_class_id) == $class->id) ? 'selected' : '' }}>{{ $class->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">STATUS</label>
                <select name="status" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                    <option value="active" {{ old('status', $student->status) == 'active' ? 'selected' : '' }}>ACTIVE</option>
                    <option value="inactive" {{ old('status', $student->status) == 'inactive' ? 'selected' : '' }}>INACTIVE</option>
                    <option value="trial" {{ old('status', $student->status) == 'trial' ? 'selected' : '' }}>TRIAL</option>
                </select>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">NOTES</label>
                <textarea name="notes" rows="4" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">{{ old('notes', $student->notes) }}</textarea>
            </div>

            <button type="submit" class="btn btn-dark" style="padding: 1rem 3rem;">UPDATE STUDENT</button>
            <a href="{{ route('admin.students.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">CANCEL</a>
        </form>
    </div>
@endsection
