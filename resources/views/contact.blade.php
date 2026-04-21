@extends('layouts.app')

@section('title', 'Contact | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal">ASK A<br><span class="outline-text">QUERY</span></h1>
        
        <div class="contact-section reveal" style="margin-top: clamp(3rem, 10vh, 5rem);">
            <p style="font-size: clamp(1rem, 2vw, 1.2rem); color: var(--dim); margin-bottom: 4rem; line-height: 1.6;">
                Have questions about batches, fees, or private sessions? Drop us a message below and the GOATED team will get back to you within 24 hours.
            </p>

            <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                </div>
                <div class="form-group">
                    <label for="batch">Interested Batch</label>
                    <input type="text" id="batch" name="batch" placeholder="e.g. Urban Choreo / Beginners">
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Tell us how we can help you..."></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
                <p id="form-status" style="margin-top: 1rem; font-size: 0.8rem; color: #0f0; display: none;">Your query has been sent successfully!</p>
            </form>
        </div>
    </section>

    <section class="reveal" style="background: #111;">
        <div class="grid">
            <div>
                <h2>VISIT US</h2>
                <p style="color: var(--dim); font-size: 1.2rem; line-height: 1.8;">
                    Plot No. 12, Urban Hub,<br>
                    Malviya Nagar, Sector 5,<br>
                    Jaipur, Rajasthan 302017
                </p>
            </div>
            <div>
                <h2>REACH OUT</h2>
                <p style="color: var(--dim); font-size: 1.2rem; line-height: 1.8;">
                    +91 96024 16361<br>
                    hello@goatedjaipur.com
                </p>
                <div class="socials" style="margin-top: 2rem;">
                    <a href="#">INSTAGRAM</a>
                    <a href="#">YOUTUBE</a>
                    <a href="#">WHATSAPP</a>
                </div>
            </div>
        </div>
        <div style="width: 100%; height: 400px; background: #111; border: 1px solid var(--border); margin-top: 4rem; position: relative; overflow: hidden;">
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: var(--dim); text-align: center;">
                <p>GOOGLE MAPS INTEGRATION</p>
                <p style="font-size: 0.8rem; margin-top: 1rem;">SEC 5, MALVIYA NAGAR, JAIPUR</p>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        // Since we don't have a backend route yet, we'll keep the mock behavior
        if (!this.action.includes('submit')) {
            e.preventDefault();
            document.getElementById('form-status').style.display = 'block';
            this.reset();
        }
    });
</script>
@endpush
