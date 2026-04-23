@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>CREATE NEW FAQ</h2>
    </div>

    <div class="card" style="max-width: 800px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <form action="{{ route('admin.faqs.store') }}" method="POST">
            @csrf
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">QUESTION</label>
                <input type="text" name="question" value="{{ old('question') }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">ANSWER</label>
                <textarea name="answer" rows="5" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">{{ old('answer') }}</textarea>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">DISPLAY ORDER</label>
                <input type="number" name="order" value="{{ old('order', 0) }}" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
            </div>

            <button type="submit" class="btn btn-dark" style="padding: 1rem 3rem;">SAVE FAQ</button>
            <a href="{{ route('admin.faqs.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">CANCEL</a>
        </form>
    </div>
@endsection
