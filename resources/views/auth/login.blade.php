@extends('layouts.app')

@section('content')
<section style="min-height: 80vh; display: flex; align-items: center; justify-content: center; background: #050505;">
    <div class="card" style="width: 100%; max-width: 450px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <h2 style="text-align: center; margin-bottom: 3rem;">ADMIN <span class="outline-text">LOGIN</span></h2>

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">EMAIL ADDRESS</label>
                <input type="email" name="email" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff; font-family: 'Inter', sans-serif;">
                @error('email')
                    <span style="color: #ff3e3e; font-size: 0.8rem; margin-top: 0.5rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 3rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">PASSWORD</label>
                <input type="password" name="password" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff; font-family: 'Inter', sans-serif;">
            </div>

            <button type="submit" class="btn btn-dark" style="width: 100%; padding: 1.5rem;">AUTHENTICATE</button>
        </form>
    </div>
</section>
@endsection
