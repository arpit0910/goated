@extends('layouts.app')

@section('title', 'Training | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal">TRAIN<br><span class="outline-text">HARDER</span></h1>
        
        <div class="grid" style="margin-top: clamp(3rem, 10vh, 5rem);">
            <div class="card reveal">
                <h2 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--dim);">BATCH 01</h2>
                <h3>URBAN EVOLVE</h3>
                <p>Advanced choreography focused on texture, isolation, and elite musicality. Designed for the experienced artist.</p>
                <p style="margin-top: auto; padding-top: 2rem; font-weight: 700; color: var(--fg); letter-spacing: 1px;">TUE / THU - 07:00 PM</p>
            </div>
            <div class="card reveal" style="transition-delay: 0.1s;">
                <h2 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--dim);">BATCH 02</h2>
                <h3>STREET DNA</h3>
                <p>Master the grooves, history, and core foundations of Popping and Hip Hop. The perfect starting point.</p>
                <p style="margin-top: auto; padding-top: 2rem; font-weight: 700; color: var(--fg); letter-spacing: 1px;">MON / WED / FRI - 05:00 PM</p>
            </div>
            <div class="card reveal" style="transition-delay: 0.2s;">
                <h2 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--dim);">BATCH 03</h2>
                <h3>GOATED ELITE</h3>
                <p>Invite-only training for professional crew selection, competitions, and mega-crew preparation.</p>
                <p style="margin-top: auto; padding-top: 2rem; font-weight: 700; color: var(--fg); letter-spacing: 1px;">WEEKENDS - 10:00 AM</p>
            </div>
        </div>
    </section>

    <section class="reveal">
        <h2>OUR STYLES</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Lyrical Hip Hop</div>
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Popping</div>
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">House</div>
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Afro Dance</div>
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Commercial Urban</div>
            <div style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">Freestyle Training</div>
        </div>
    </section>

    <section class="reveal" style="text-align: center;">
        <h2>JOIN THE MOVEMENT</h2>
        <p style="color: var(--dim); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
            The next selection cycle starts soon. Secure your trial spot today and witness the GOATED standard in person, mentored by finalists of DID Little Master & Hip Hop India.
        </p>
        <a href="{{ route('contact') }}" class="btn">Book Trial Class</a>
    </section>
@endsection
