@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>EDIT GALLERY ASSET</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">ASSET TITLE</label>
                <input type="text" name="title" value="{{ old('title', $gallery->title) }}" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">DESCRIPTION</label>
                <textarea name="description" rows="3" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">{{ old('description', $gallery->description) }}</textarea>
            </div>

            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">ASSET TYPE</label>
                    <select name="type" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                        <option value="image" {{ old('type', $gallery->type) == 'image' ? 'selected' : '' }}>IMAGE</option>
                        <option value="video" {{ old('type', $gallery->type) == 'video' ? 'selected' : '' }}>VIDEO</option>
                    </select>
                </div>
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">UPLOAD NEW ASSET</label>
                    <input type="file" name="image" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1rem; color: #fff;">
                    <p style="font-size: 0.7rem; color: var(--dim); margin-top: 0.5rem;">Current: {{ $gallery->image }}</p>
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: flex; align-items: center; gap: 1rem; cursor: pointer;">
                    <input type="hidden" name="is_featured" value="0">
                    <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $gallery->is_featured) ? 'checked' : '' }} style="width: 20px; height: 20px; accent-color: var(--fg);">
                    <span style="font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--fg); letter-spacing: 1px;">FEATURE ON HOME PAGE</span>
                </label>
            </div>

            <button type="submit" class="btn btn-dark" style="padding: 1rem 3rem;">UPDATE ASSET</button>
            <a href="{{ route('admin.gallery.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">CANCEL</a>
        </form>
    </div>
@endsection
