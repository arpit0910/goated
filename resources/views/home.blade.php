@extends('layouts.app')

@section('content')
    <section class="hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('header-video.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1 class="reveal">GOATED<br><span class="outline-text">JAIPUR</span></h1>
            <p class="reveal" style="max-width: 650px; margin: 0 auto 4rem;">The ultimate urban training ground in the Pink
                City. Join the generation defining the future of movement through discipline, culture, and raw expression.
            </p>
            <div class="reveal" style="transition-delay: 0.2s;">
                <a href="{{ route('classes') }}" class="btn">View Memberships</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span class="scroll-text">SCROLL</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <section class="reveal" style="background: #111;">
        <div class="grid"
            style="align-items: center; gap: clamp(3rem, 10vw, 6rem); grid-template-columns: repeat(auto-fit, minmax(min(100%, 400px), 1fr));">
            <div style="display: flex; justify-content: flex-start;">
                <div class="card" style="max-width: 420px; margin: 0; transform: rotate(-2deg);">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <img src="{{ asset('images/divyam_founder.png') }}" alt="Founder Divyam Vijay"
                        style="width: 100%; aspect-ratio: 1; object-fit: cover; margin-bottom: 2rem; filter: grayscale(1); transition: var(--transition);">
                    <h3>DIVYAM VIJAY</h3>
                    <p>Celebrity Choreographer with 15+ years of industry experience. Contestant for DID Little Master & Hip
                        Hop India. Led world tours for Arijit Singh & Honey Singh.</p>
                </div>
            </div>
            <div class="architect-content">
                <h2 class="reveal" style="line-height: 1.1;">THE GOAT<br><span class="outline-text">AT THE HELM</span></h2>
                <p class="reveal"
                    style="color: var(--fg); font-size: clamp(1rem, 2.2vw, 1.4rem); line-height: 1.8; font-weight: 300;">
                    Our training is led by a true industry titan. From the biggest reality stages to global stadiums, our
                    lead choreographer has defined the standard of Indian urban dance.
                </p>
                <div style="display: flex; flex-direction: column; gap: 2rem; margin-top: 3rem;">
                    <div style="padding-left: 1.5rem; border-left: 2px solid var(--fg); position: relative;">
                        <span
                            style="position: absolute; left: -1rem; top: 0; font-size: 0.6rem; color: var(--dim);">01</span>
                        <h4 style="margin-bottom: 0.5rem;">TELEVISION LEGACY</h4>
                        <p style="font-size: 0.9rem; color: var(--fg);">Finalist & Choreographer: DID Little Master | Hip
                            Hop India</p>
                    </div>
                    <div style="padding-left: 1.5rem; border-left: 2px solid var(--fg); position: relative;">
                        <span
                            style="position: absolute; left: -1rem; top: 0; font-size: 0.6rem; color: var(--dim);">02</span>
                        <h4 style="margin-bottom: 0.5rem;">GLOBAL STAGES</h4>
                        <p style="font-size: 0.9rem; color: var(--fg);">Official World Tour Choreographer: Arijit Singh | Yo
                            Yo Honey Singh</p>
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
        <div class="movement-story">
            <div class="movement-copy">
                <p class="eyebrow">Built for rhythm, reps, and real stage pressure</p>
                <h2 style="">THE<br><span class="outline-text">REVOLUTION.</span></h2>
                <p style="color: var(--fg); margin-bottom: 3.5rem; font-size: clamp(1rem, 2vw, 1.25rem); line-height: 1.8;">
                    We don't just teach steps; we sculpt artists. GOATED is a culture, a community, and a high-performance
                    training ground for those who refuse to be average.
                </p>
                <a href="{{ route('about') }}" class="btn">Our Philosophy</a>
            </div>
            <div class="movement-visual" aria-hidden="true">
                <div class="motion-orbit orbit-one"></div>
                <div class="motion-orbit orbit-two"></div>
                <img src="{{ asset('images/revolution_dancer.png') }}" alt="Urban Dancer" class="dancer-image">
                <div class="beat-chip chip-one">8 COUNT</div>
                <div class="beat-chip chip-two">GROOVE</div>
                <div class="beat-chip chip-three">TEXTURE</div>
            </div>
        </div>
    </section>

    <section class="reveal" style="background: #050505;">
        <h2 class="text-center">WHY <span class="outline-text">GOATED?</span></h2>
        <div class="grid">
            <div class="card">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <h3>WORLD-CLASS MENTORSHIP</h3>
                <p>Learn from international-grade artists who have dominated national stages and global platforms.</p>
            </div>
            <div class="card">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <h3>CULTURE OVER CLOUT</h3>
                <p>We dive deep into the history and foundations of Hip Hop, preserving the essence of street dance.</p>
            </div>
            <div class="card">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <h3>UNRIVALED NETWORK</h3>
                <p>Gain access to exclusive workshops, industry placements, and a brotherhood of elite performers.</p>
            </div>
            <div class="card">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <h3>PERFORMANCE-READY DRILLS</h3>
                <p>Train with camera, stage, audition, and crew routines so your movement holds up beyond the mirror.</p>
            </div>
        </div>

        <div class="reveal breakout-section"
            style="background: var(--fg); color: var(--bg);">
            <div class="stats-grid"
                style="margin: 0 auto; max-width: 1200px; padding: 0 5%; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: clamp(2rem, 5vw, 4rem);">
                <div class="stat-item" style="text-align: center; border-right: 1px solid rgba(0,0,0,0.1);">
                    <h4 class="stat-number"
                        style="font-size: clamp(2.5rem, 6vw, 4.5rem); margin-bottom: 1rem; color: var(--bg); font-family: 'Syne', sans-serif;">
                        500+</h4>
                    <p
                        style="color: var(--bg); letter-spacing: 4px; font-size: 0.7rem; font-weight: 800; font-family: 'Syncopate', sans-serif;">
                        DANCERS TRAINED</p>
                </div>
                <div class="stat-item" style="text-align: center; border-right: 1px solid rgba(0,0,0,0.1);">
                    <h4 class="stat-number"
                        style="font-size: clamp(2.5rem, 6vw, 4.5rem); margin-bottom: 1rem; color: var(--bg); font-family: 'Syne', sans-serif;">
                        10+</h4>
                    <p
                        style="color: var(--bg); letter-spacing: 4px; font-size: 0.7rem; font-weight: 800; font-family: 'Syncopate', sans-serif;">
                        CELEBRITY PROJECTS</p>
                </div>
                <div class="stat-item" style="text-align: center;">
                    <h4 class="stat-number"
                        style="font-size: clamp(2.5rem, 6vw, 4.5rem); margin-bottom: 1rem; color: var(--bg); font-family: 'Syne', sans-serif;">
                        15+</h4>
                    <p
                        style="color: var(--bg); letter-spacing: 4px; font-size: 0.7rem; font-weight: 800; font-family: 'Syncopate', sans-serif;">
                        ELITE COACHES</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-cta-section reveal" style="text-align: center;">
        <div class="section-kicker eyebrow-center">Choose Your Path</div>
        <h2>PROFESSIONAL MEMBERSHIPS &<br><span class="outline-text"> CHOREOGRAPHY.</span></h2>
        <div class="cta-grid">
            <div class="cta-panel class-panel">
                <div class="panel-number" style="top: 2rem; left: 50%; transform: translateX(-50%);">01</div>
                <h3>ELITE TRAINING</h3>
                <p>Gain access to professional-grade urban training batches. Built for consistency, growth, and industry
                    readiness.</p>
                <a href="{{ route('classes') }}" class="btn">View Memberships</a>
            </div>
            <div class="cta-panel choreo-panel">
                <div class="panel-number" style="top: 2rem; left: 50%; transform: translateX(-50%);">02</div>
                <h3>CHOREOGRAPHY</h3>
                <p>Expert choreography for artists, weddings, and commercial projects. Transform your vision into movement.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-dark">Get a Quote</a>
            </div>
        </div>
    </section>

    @if ($testimonials->count() > 0)
        <section class="reveal">
            <h2 class="text-center">STUDENT <span class="outline-text">VIBES</span></h2>
            <div class="testimonial-grid">
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-card">
                        <p class="testimonial-text">"{{ $testimonial->content }}"</p>
                        <p class="testimonial-author">{{ strtoupper($testimonial->student_name) }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endif

    <section class="faq-section reveal" style="text-align: center;">
        <div class="faq-heading">
            <p class="eyebrow eyebrow-center">Questions before the first count?</p>
            <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div>
        <div class="faq-list">
            @foreach ($faqs as $index => $faq)
                <details class="faq-item" {{ $index === 0 ? 'open' : '' }}>
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <summary>{{ $faq->question }}</summary>
                    <p>{{ $faq->answer }}</p>
                </details>
            @endforeach
        </div>
    </section>
@endsection
