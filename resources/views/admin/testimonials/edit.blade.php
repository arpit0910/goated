@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>EDIT TESTIMONIAL</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">STUDENT NAME</label>
                <input type="text" name="student_name" value="{{ old('student_name', $testimonial->student_name) }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">TESTIMONIAL CONTENT</label>
                <textarea name="content" rows="6" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">{{ old('content', $testimonial->content) }}</textarea>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: flex; align-items: center; gap: 1rem; cursor: pointer;">
                    <input type="checkbox" name="is_published" value="1" {{ old('is_published', $testimonial->is_published) ? 'checked' : '' }} style="width: 20px; height: 20px; accent-color: var(--fg);">
                    <span style="font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--fg); letter-spacing: 1px;">PUBLISH ON SITE</span>
                </label>
            </div>

            <button type="submit" class="btn btn-dark" style="padding: 1rem 3rem;">UPDATE TESTIMONIAL</button>
            <a href="{{ route('admin.testimonials.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">CANCEL</a>
        </form>
    </div>
@endsection
