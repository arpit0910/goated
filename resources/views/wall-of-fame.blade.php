@extends('layouts.app')

@section('title', 'Wall of Fame | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal">WALL OF<br><span class="outline-text">FAME</span></h1>
        <p class="reveal" style="max-width: 600px; margin-top: 2rem;">
            Our journey through the lenses. Moments captured with some of the industry's biggest legends and inspirations who have visited GOATED Jaipur.
        </p>

        <div class="gallery reveal" style="margin-top: clamp(3rem, 10vh, 5rem);">
            <div class="gallery-item">
                <img src="{{ asset('images/celebrities/arijit_singh_tour.png') }}" alt="Arijit Singh World Tour">
                <div class="gallery-overlay">
                    <h3>WORLD TOUR</h3>
                    <p>On Stage with Arijit Singh</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/celebrities/nora_fatehi.png') }}" alt="Nora Fatehi">
                <div class="gallery-overlay">
                    <h3>URBAN SESSION</h3>
                    <p>With Nora Fatehi</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/celebrities/hip_hop_india_win.png') }}" alt="Hip Hop India Winner">
                <div class="gallery-overlay">
                    <h3>VICTORY</h3>
                    <p>Hip Hop India Winner Moment</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1547153760-18fc86324498?auto=format&fit=crop&q=80&w=800" alt="Remo D'Souza">
                <div class="gallery-overlay">
                    <h3>DANCE SUMMIT</h3>
                    <p>With Remo D'Souza</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1535525153412-5a42439a210d?auto=format&fit=crop&q=80&w=800" alt="Dharmesh Yelande">
                <div class="gallery-overlay">
                    <h3>MASTERCLASS</h3>
                    <p>With Dharmesh Yelande</p>
                </div>
            </div>
            <div class="gallery-item">
                <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?auto=format&fit=crop&q=80&w=800" alt="Shakti Mohan">
                <div class="gallery-overlay">
                    <h3>WORKSHOP</h3>
                    <p>With Shakti Mohan</p>
                </div>
            </div>
        </div>
    </section>
@endsection
