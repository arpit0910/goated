@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE GALLERY</h2>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-dark" style="padding: 0.8rem 2rem; font-size: 0.7rem;">+ UPLOAD NEW ASSET</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Asset</th>
                    <th>Title</th>
                    <th>Type</th>
                    <th>Featured</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr>
                        <td>
                            @php
                                $imagePath = $item->image;
                                if (!Str::startsWith($imagePath, ['http://', 'https://', 'images/'])) {
                                    $imagePath = 'storage/' . $imagePath;
                                }
                            @endphp
                            <img src="{{ asset($imagePath) }}" alt="" style="height: 50px; width: 50px; object-fit: cover; border: 1px solid var(--border);">
                        </td>
                        <td>{{ $item->title ?? 'Untitled' }}</td>
                        <td>{{ ucfirst($item->type) }}</td>
                        <td>{{ $item->is_featured ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.gallery.edit', $item) }}" class="action-btn btn-edit">Edit</a>
                            <form action="{{ route('admin.gallery.destroy', $item) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this asset?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO GALLERY ASSETS FOUND</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
