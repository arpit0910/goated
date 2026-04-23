@extends('layouts.app')

@section('content')
    <section class="hero">
        <video autoplay muted loop playsinline class="hero-video">
            <source src="{{ asset('header-video.mp4') }}" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1 class="reveal">GOATED<br><span class="outline-text">JAIPUR</span></h1>
            <p class="reveal">The ultimate urban training ground in the Pink City. Join the generation defining the future
                of
                movement through discipline, culture, and raw expression.</p>
            <div class="reveal" style="transition-delay: 0.2s;">
                <a href="{{ route('classes') }}" class="btn">Explore Training</a>
            </div>
        </div>
        <div class="scroll-indicator">
            <span class="scroll-text">SCROLL</span>
            <div class="scroll-line"></div>
        </div>
    </section>

    <section class="reveal" style="background: #111; padding: clamp(4rem, 12vh, 8rem) 8%;">
        <div class="grid" style="align-items: center; gap: clamp(3rem, 10vw, 6rem); grid-template-columns: repeat(auto-fit, minmax(min(100%, 450px), 1fr));">
            <div style="display: flex; justify-content: center;">
                <div class="card" style="max-width: 420px; margin: 0;">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <img src="{{ asset('images/divyam_founder.png') }}" alt="Founder Divyam Vijay"
                        style="width: 100%; aspect-ratio: 1; object-fit: cover; margin-bottom: 2rem; filter: grayscale(1); transition: var(--transition);">
                    <h3>DIVYAM VIJAY</h3>
                    <p>Celebrity Choreographer with 15+ years of industry experience. Contestant f
                        or DID Little Master & Hip Hop
                        India. Led world tours for Arijit Singh & Honey
                        Singh.</p>
                </div>
            </div>
            <div class="architect-content">
                <h2 class="reveal" style="margin-bottom: 3rem;">THE GOAT<br><span class="outline-text">AT THE HELM</span></h2>
                <p class="reveal" style="color: var(--fg); margin-bottom: 3rem; font-size: 1.15rem; line-height: 1.7;">
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
                            Yo Honey Singh
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
        <div class="movement-story">
            <div class="movement-copy">
                <p class="eyebrow">Built for rhythm, reps, and real stage pressure</p>
                <h2>THE<br><span class="outline-text">REVOLUTION.</span></h2>
                <p style="color: var(--fg); margin-bottom: 3rem;">
                    We don't just teach steps; we sculpt artists. GOATED is a culture, a community, and a
                    high-performance training ground for those who refuse to be average.
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

    <section class="reveal" style="background: #050505; padding-bottom: 0;">
        <h2>WHY GOATED?</h2>
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



        <!-- Stats Integrated: Full Breakout -->
        <div class="reveal"
            style="background: var(--fg); color: var(--bg); padding: clamp(3rem, 8vw, 6rem) 0; margin-top: clamp(4rem, 10vh, 8rem); width: 100vw; position: relative; left: 50%; right: 50%; margin-left: -50vw; margin-right: -50vw;">
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

    <section class="home-cta-section reveal">
        <div class="section-kicker">Pick your lane</div>
        <h2>TRAIN IN CLASS.<br><span class="outline-text">CREATE WITH CHOREOGRAPHY.</span></h2>
        <div class="cta-grid">
            <div class="cta-panel class-panel">
                <div class="panel-number">01</div>
                <h3>JOIN A CLASS</h3>
                <p>Step into structured batches for foundations, musicality, freestyle, and urban choreography with the
                    GOATED crew.</p>
                <a href="{{ route('classes') }}" class="btn">View Classes</a>
            </div>
            <div class="cta-panel choreo-panel">
                <div class="panel-number">02</div>
                <h3>BOOK CHOREOGRAPHY</h3>
                <p>Need a wedding piece, school act, event opener, artist performance, or reel-ready routine? Build it with
                    our choreographers.</p>
                <a href="{{ route('contact') }}" class="btn btn-dark">Start Choreography</a>
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
                <p class="testimonial-text">"The focus on foundations here changed everything for me. I went from just
                    doing
                    steps to actually dancing."</p>
                <p class="testimonial-author">PRIYA S.</p>
            </div>
        </div>
    </section>

    <section class="faq-section reveal">
        <div class="faq-heading">
            <p class="eyebrow">Questions before the first count?</p>
            <h2>FAQ</h2>
        </div>
        <div class="faq-list">
            <details class="faq-item" open>
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <summary>Do I need dance experience to join GOATED?</summary>
                <p>No. Beginners can start with foundation-focused batches, while experienced dancers can move into
                    choreography, freestyle, and elite training tracks.</p>
            </details>
            <details class="faq-item">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <summary>What styles do you teach?</summary>
                <p>We train in Hip Hop foundations, lyrical hip hop, popping, house, afro, commercial urban, freestyle, and
                    performance choreography.</p>
            </details>
            <details class="faq-item">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <summary>Can I book choreography for weddings or events?</summary>
                <p>Yes. The team creates custom choreography for weddings, school and college events, brand launches, artist
                    sets, stage shows, and social media shoots.</p>
            </details>
            <details class="faq-item">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                <summary>How do I book a trial class?</summary>
                <p>Use the contact page and share your level, preferred batch, and schedule. The GOATED team will help you
                    pick the right training slot.</p>
            </details>
        </div>
    </section>
@endsection
