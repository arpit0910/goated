@extends('layouts.app')

@section('title', 'Philosophy | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal" style="word-break: normal;">OUR<br><span class="outline-text">PHILOSOPHY</span></h1>

        <div class="reveal" style="max-width: 900px; margin-top: clamp(3rem, 10vh, 5rem);">
            <h2 class="reveal">THE "GOATED" LEGACY</h2>
            <p style="margin-bottom: 2rem;">
                Born in 2020, GOATED Jaipur was founded on a singular mission: to bring institutional-grade urban training
                to the heart of Rajasthan. Our name—Generation Of Aspiring Talent And Educating Dancers—is more than an
                acronym; it's our DNA.
            </p>
            <p style="margin-bottom: 4rem;">
                We believe that breaking boundaries starts with mastering basics. Our sanctuary is where raw passion meets
                technical precision, educating dancers on the history, ethics, and evolution of street cultures while
                preparing them for global stages.
            </p>

            <div class="grid" style="margin-top: 4rem;">
                <div class="card">
                    <h3>STRATEGIC EDUCATION</h3>
                    <p>We provide a structured curriculum for every level, mapping your journey from a hobbyist to a
                        professional performer.</p>
                </div>
                <div class="card">
                    <h3>ETHICAL CULTURE</h3>
                    <p>Hip Hop is a lifestyle. We teach the respect, history, and community ethics that form the bedrock of
                        the movement.</p>
                </div>
                <div class="card">
                    <h3>UNAPOLOGETIC EXCELLENCE</h3>
                    <p>We strive for the 'Goated' benchmark in every rep—drilling musicality, power, and stage presence
                        until it's effortless.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="reveal" style="background: #111;">
        <div style="text-align: center;">
            <h2>MEET THE<br>ARCHITECTS</h2>
            <div class="grid">
                <div class="card">
                    <img src="{{ asset('images/divyam_founder.png') }}" alt="Founder Divyam Vijay"
                        style="width: 100%; aspect-ratio: 1; object-fit: cover; margin-bottom: 2rem; filter: grayscale(1); transition: var(--transition);">
                    <h3>DIVYAM VIJAY</h3>
                    <p>FOUNDER & HEAD OF TRAINING</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1535525153412-5a42439a210d?auto=format&fit=crop&q=80&w=600"
                        alt="Co-Founder Z"
                        style="width: 100%; aspect-ratio: 1; object-fit: cover; margin-bottom: 2rem; filter: grayscale(1); transition: var(--transition);">
                    <h3>CO-FOUNDER Z</h3>
                    <p>Master of Foundations and Technical Lead, specializing in Hip Hop foundations and crew management.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="reveal">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2>THE FOUNDER'S VISION</h2>
            <div style="padding: clamp(1rem, 3vw, 1.5rem); background: #0a0a0a; border: 1px solid var(--border); position: relative;">
                <span
                    style="position: absolute; top: -1rem; left: 1rem; font-size: clamp(5rem, 15vw, 8rem); font-family: 'Syne', sans-serif; color: #111; z-index: 0;">&ldquo;</span>
                <p style="font-style: italic; color: var(--fg); position: relative; z-index: 1;">
                    GOATED is not just a dance studio; it's the manifestation of a decade of blood, sweat, and movement. My
                    vision was to create a space in Jaipur where any dancer, regardless of their background, could access
                    the same elite training that I've shared on global stages with legends like Arijit Singh and Honey
                    Singh.
                </p>
                <p
                    style="margin-top: 2rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; position: relative; z-index: 1;">
                    &mdash; DIVYAM VIJAY</p>
            </div>
        </div>
    </section>
@endsection
