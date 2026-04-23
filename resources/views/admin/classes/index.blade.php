@extends('layouts.admin')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 3rem;">
        <h2>MANAGE CLASSES</h2>
        <a href="{{ route('admin.classes.create') }}" class="btn btn-dark" style="padding: 0.8rem 2rem; font-size: 0.7rem;">+ ADD NEW CLASS</a>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Instructor</th>
                    <th>Schedule</th>
                    <th>Pricing & Slots</th>
                    <th>Bookings</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($classes as $class)
                    <tr>
                        <td>{{ $class->name }}</td>
                        <td>{{ $class->instructor }}</td>
                        <td>{{ $class->schedule }}</td>
                        <td>
                            @foreach($class->prices as $price)
                                <div style="font-size: 0.6rem; margin-bottom: 0.3rem;">
                                    <strong>{{ $price->label }}:</strong> {{ $price->price }} 
                                    @if($price->slots)
                                        <span style="color: var(--dim);">({{ $price->available_slots }}/{{ $price->slots }} left)</span>
                                    @endif
                                </div>
                            @endforeach
                        </td>
                        <td>
                            <div style="font-size: 0.8rem; font-weight: 700;">{{ \App\Models\Booking::where('dance_class_id', $class->id)->where('payment_status', 'completed')->count() }}</div>
                        </td>
                        <td>
                            <a href="{{ route('admin.classes.edit', $class) }}" class="action-btn btn-edit">Edit</a>
                            <form action="{{ route('admin.classes.destroy', $class) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn btn-delete" onclick="return confirm('Delete this class?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" style="text-align: center; padding: 3rem; color: var(--dim); font-size: 0.8rem; letter-spacing: 1px;">NO CLASSES CREATED YET</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
