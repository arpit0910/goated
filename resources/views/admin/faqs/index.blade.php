@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE FAQs</h2>
        <a href="{{ route('admin.faqs.create') }}" class="btn btn-dark" style="padding: 0.8rem 2rem; font-size: 0.7rem;">+ ADD NEW FAQ</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Question</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $faq)
                    <tr>
                        <td>{{ $faq->order }}</td>
                        <td>{{ $faq->question }}</td>
                        <td>
                            <a href="{{ route('admin.faqs.edit', $faq) }}" class="action-btn btn-edit">Edit</a>
                            <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this FAQ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO FAQs AVAILABLE</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
