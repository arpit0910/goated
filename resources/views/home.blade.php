@extends('layouts.app')

@section('content')
    <section class="hero"
        style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1547153760-18fc86324498?auto=format&fit=crop&q=80&w=2000') center/cover no-repeat;">
        <h1 class="reveal">GOATED<br><span class="outline-text">JAIPUR</span></h1>
        <p class="reveal">The ultimate urban training ground in the Pink City. Join the generation defining the future of
            movement through discipline, culture, and raw expression.</p>
        <div class="reveal" style="transition-delay: 0.2s;">
            <a href="{{ route('classes') }}" class="btn">Explore Training</a>
        </div>
    </section>

    <section class="reveal" style="background: #111;">
        <div class="grid" style="align-items: center;">
            <div class="card">
                <img src="{{ asset('images/divyam_founder.png') }}" alt="Founder Divyam Vijay"
                    style="width: 100%; aspect-ratio: 1; object-fit: cover; margin-bottom: 2rem; filter: grayscale(1); transition: var(--transition);">
                <h3>DIVYAM VIJAY</h3>
                <p>Celebrity Choreographer for DID Little Master & Hip Hop India. Led world tours for Arijit Singh & Honey
                    Singh.</p>
            </div>
            <div>
                <h2 class="reveal">THE GOAT<br><span class="outline-text">AT THE HELM</span></h2>
                <p class="reveal" style="color: var(--fg); margin-bottom: 2rem;">
                    Our training is led by a true industry titan. From the biggest reality stages to global stadiums, our
                    lead choreographer has defined the standard of Indian urban dance.
                </p>
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <div style="padding-left: 1.5rem; border-left: 2px solid var(--fg);">
                        <h4>TELEVISION LEGACY</h4>
                        <p style="font-size: 0.9rem;">Finalist & Choreographer: DID Little Master | Hip Hop India</p>
                    </div>
                    <div style="padding-left: 1.5rem; border-left: 2px solid var(--fg);">
                        <h4>GLOBAL STAGES</h4>
                        <p style="font-size: 0.9rem;">Official World Tour Choreographer: Arijit Singh | Yo Yo Honey Singh
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="marquee">
        <div class="marquee-content">
            <span class="marquee-item">URBAN CHOREOGRAPHY</span>
            <span class="marquee-item">STREET FOUNDATIONS</span>
            <span class="marquee-item">ELITE TEAM TRAINING</span>
            <span class="marquee-item">HIP HOP CULTURE</span>
            <span class="marquee-item">URBAN CHOREOGRAPHY</span>
            <span class="marquee-item">STREET FOUNDATIONS</span>
            <span class="marquee-item">ELITE TEAM TRAINING</span>
            <span class="marquee-item">HIP HOP CULTURE</span>
        </div>
    </div>

    <section class="reveal">
        <div style="max-width: 800px;">
            <h2>THE<br>REVOLUTION.</h2>
            <p style="color: var(--fg); margin-bottom: 3rem;">
                We don't just teach steps; we sculpt artists. GOATED is a culture, a community, and a
                high-performance training ground for those who refuse to be average.
            </p>
            <a href="{{ route('about') }}" class="btn">Our Philosophy</a>
        </div>
    </section>

    <section class="reveal" style="background: #050505; padding-bottom: 0;">
        <h2>WHY GOATED?</h2>
        <div class="grid">
            <div class="card">
                <h3>WORLD-CLASS MENTORSHIP</h3>
                <p>Learn from international-grade artists who have dominated national stages and global platforms.</p>
            </div>
            <div class="card">
                <h3>CULTURE OVER CLOUT</h3>
                <p>We dive deep into the history and foundations of Hip Hop, preserving the essence of street dance.</p>
            </div>
            <div class="card">
                <h3>UNRIVALED NETWORK</h3>
                <p>Gain access to exclusive workshops, industry placements, and a brotherhood of elite performers.</p>
            </div>
        </div>

        <!-- Stats Integrated: Full Breakout -->
        <div class="reveal"
            style="background: var(--fg); color: var(--bg); padding: clamp(4rem, 10vw, 8rem) 0; margin-top: clamp(6rem, 15vh, 10rem); width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw;">
            <div class="stats-grid"
                style="margin-top: 0; max-width: 1200px; margin-left: auto; margin-right: auto; padding: 0 5%; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 3rem;">
                <div class="stat-item" style="text-align: center;">
                    <h4 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 0.5rem;">500+</h4>
                    <p style="color: var(--bg); letter-spacing: 2px; font-size: 0.75rem; font-weight: 700;">DANCERS TRAINED
                    </p>
                </div>
                <div class="stat-item" style="text-align: center;">
                    <h4 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 0.5rem;">10+</h4>
                    <p style="color: var(--bg); letter-spacing: 2px; font-size: 0.75rem; font-weight: 700;">CELEBRITY
                        PROJECTS</p>
                </div>
                <div class="stat-item" style="text-align: center;">
                    <h4 style="font-size: clamp(2.5rem, 5vw, 4rem); margin-bottom: 0.5rem;">15+</h4>
                    <p style="color: var(--bg); letter-spacing: 2px; font-size: 0.75rem; font-weight: 700;">ELITE
                        CHOREOGRAPHERS</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reveal">
        <h2>STUDENT VIBES</h2>
        <div class="testimonial-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">"GOATED isn't just a studio; it's where I found my movement and my family. The
                    training is intense but the growth is real."</p>
                <p class="testimonial-author">ARYAN K.</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"The focus on foundations here changed everything for me. I went from just doing
                    steps to actually dancing."</p>
                <p class="testimonial-author">PRIYA S.</p>
            </div>
        </div>
    </section>
@endsection
