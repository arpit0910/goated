@extends('layouts.app')

@section('title', 'Contact | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal page-hero-title">ASK A<br><span class="outline-text">QUERY</span></h1>
        
        <div class="contact-section reveal" style="margin-top: clamp(3rem, 10vh, 5rem);">
            <p style="font-size: clamp(1rem, 2vw, 1.2rem); color: var(--dim); margin-bottom: 4rem; line-height: 1.6;">
                Have questions about batches, fees, or private sessions? Drop us a message below and the GOATED team will get back to you within 24 hours.
            </p>

            @if(session('success'))
                <div style="background: rgba(0, 255, 0, 0.1); border: 1px solid #0f0; color: #0f0; padding: 1.5rem; margin-bottom: 2rem; font-size: 0.9rem;">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required placeholder="John Doe" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="john@example.com" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="dance_class_id">Interested Batch</label>
                    <select id="dance_class_id" name="dance_class_id" style="width: 100%; background: transparent; border: none; border-bottom: 1px solid var(--border); padding: 1rem 0; color: #fff; font-family: inherit; font-size: 1rem; border-radius: 0;">
                        <option value="" style="background: #000;">SELECT A BATCH (OPTIONAL)</option>
                        @foreach($classes as $class)
                            <option value="{{ $class->id }}" style="background: #000;">{{ strtoupper($class->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Tell us how we can help you...">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>
    </section>

    <section class="reveal" style="background: #111;">
        <div class="grid">
            <div>
                <h2>VISIT US</h2>
                <p style="color: var(--dim); font-size: 1.1rem; line-height: 1.8;">
                    Above DK Jewellers, 3rd Floor,<br>
                    Vijay Path, Mansarovar Sector 7, Sector 12,<br>
                    Mansarovar, Jaipur, Rajasthan 302020
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
        <div style="width: 100%; height: 450px; border: 1px solid var(--border); margin-top: 4rem; position: relative; overflow: hidden; filter: grayscale(1) invert(0.9) contrast(1.2);">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.89736186407!2d75.7645167!3d26.8617822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db449d76c9713%3A0x13f9601e6fd091ca!2sD.K.%20Jewellers!5e0!3m2!1sen!2sin!4v1713854123456!5m2!1sen!2sin" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </section>
@endsection
