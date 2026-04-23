@extends('layouts.app')

@section('title', 'Philosophy | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal page-hero-title">OUR<br><span class="outline-text">PHILOSOPHY</span></h1>

        <div class="reveal" style="max-width: 1200px; margin-top: clamp(3rem, 10vh, 5rem);">
            <h2 class="reveal">THE "GOATED" LEGACY</h2>
            <p style="margin-bottom: 2rem; max-width: 900px;">
                Born in 2020, GOATED Jaipur was founded on a singular mission: to bring institutional-grade urban training
                to the heart of Rajasthan. Our name—Generation Of Aspiring Talent And Educating Dancers—is more than an
                acronym; it's our DNA.
            </p>
            <p style="margin-bottom: 4rem; max-width: 900px;">
                We believe that breaking boundaries starts with mastering basics. Our sanctuary is where raw passion meets
                technical precision, educating dancers on the history, ethics, and evolution of street cultures while
                preparing them for global stages.
            </p>

            <div class="grid"
                style="margin-top: 4rem; grid-template-columns: repeat(auto-fit, minmax(min(100%, 350px), 1fr));">
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>STRATEGIC EDUCATION</h3>
                    <p>We provide a structured curriculum for every level, mapping your journey from a hobbyist to a
                        professional performer.</p>
                </div>
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>ETHICAL CULTURE</h3>
                    <p>Hip Hop is a lifestyle. We teach the respect, history, and community ethics that form the bedrock of
                        the movement.</p>
                </div>
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>UNAPOLOGETIC EXCELLENCE</h3>
                    <p>We strive for the 'Goated' benchmark in every rep—drilling musicality, power, and stage presence
                        until it's effortless.</p>
                </div>
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>GLOBAL STANDARDS</h3>
                    <p>Our training modules are inspired by global urban benchmarks, ensuring you're ready for any stage
                        worldwide.</p>
                </div>
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>MENTORSHIP-DRIVEN</h3>
                    <p>We don't just teach steps; we build artists. Personalized feedback and career guidance are at our
                        core.</p>
                </div>
                <div class="card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <h3>COMMUNITY FIRST</h3>
                    <p>Join a brotherhood of dancers who push each other. GOATED is a safe haven for growth and
                        collaboration.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reveal" style="background: #111; padding: clamp(4rem, 10vh, 7rem) 8%;">
        <div class="grid"
            style="grid-template-columns: repeat(auto-fit, minmax(min(100%, 320px), 1fr)); align-items: center; gap: clamp(2rem, 6vw, 4rem);">
            <div class="architect-visual" style="position: relative;">
                <div class="card"
                    style="transform: rotate(-1.5deg); max-width: 480px; margin: 0 auto; background: #050505; border: 1px solid rgba(255,255,255,0.1);">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>
                    <img src="{{ asset('images/divyam_founder.png') }}" alt="Founder Divyam Vijay"
                        style="width: 100%; aspect-ratio: 0.85; object-fit: cover; filter: grayscale(1); border-bottom: 1px solid rgba(255,255,255,0.05);">
                    <div style="padding: 2.5rem;">
                        <h3 style="margin: 0; font-size: 1.8rem; letter-spacing: 1px;">DIVYAM VIJAY</h3>
                        <p
                            style="margin: 0.8rem 0 0; font-size: 0.75rem; letter-spacing: 3px; font-weight: 700; color: var(--dim); text-transform: uppercase;">
                            FOUNDER / HEAD OF TRAINING
                        </p>
                    </div>
                </div>
                <!-- Decorative element behind card -->
                <div
                    style="position: absolute; inset: 2rem; border: 1px solid rgba(255,255,255,0.03); transform: rotate(2deg); z-index: -1; pointer-events: none;">
                </div>
            </div>

            <div class="architect-content">
                <p class="eyebrow" style="margin-bottom: 0.8rem;">The mind behind the movement</p>
                <h2 style="margin-bottom: 2.5rem; font-size: clamp(1.8rem, 4.5vw, 3.4rem); line-height: 1.1;">THE <span
                        class="outline-text">ARCHITECT</span></h2>

                <div style="position: relative; padding-left: 2rem; border-left: 2px solid var(--border);">
                    <h4 style="color: var(--dim); margin-bottom: 2rem; font-size: 0.8rem; letter-spacing: 4px;">THE VISION
                    </h4>
                    <p
                        style="font-style: italic; color: var(--fg); font-size: clamp(1.2rem, 2.2vw, 1.6rem); line-height: 1.6; margin-bottom: 2.5rem; font-family: 'Syne', sans-serif;">
                        &ldquo;GOATED is not just a dance studio; it's the manifestation of 15+ years of blood, sweat, and
                        movement.&rdquo;
                    </p>
                    <p style="color: var(--dim); line-height: 1.8; font-size: 1.05rem; max-width: 500px;">
                        My vision was to create a space in Jaipur where any dancer, regardless of their background, could
                        access
                        the same elite training that I've shared on global stages with legends like Arijit Singh and Honey
                        Singh.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
