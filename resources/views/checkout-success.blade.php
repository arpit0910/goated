@extends('layouts.app')

@section('title', 'Success | GOATED JAIPUR')

@section('content')
    <style>
        .success-h1 {
            font-size: clamp(2.5rem, 8vw, 4rem);
            line-height: 0.95;
            margin-bottom: 3rem;
        }

        .success-booking-row {
            display: flex; 
            justify-content: space-between; 
            padding: 1.2rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
            font-size: 0.85rem;
        }

        .success-booking-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        @media (max-width: 600px) {
            .success-booking-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.5rem;
            }
            .success-booking-row span:last-child {
                font-family: monospace;
                word-break: break-all;
                color: var(--fg);
            }
        }
    </style>

    <section style="min-height: 90vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 8rem 5% 4rem;">
        <div style="width: 100%; max-width: 650px;">
            <div style="width: 50px; height: 50px; border: 1px solid #0f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2.5rem; color: #0f0; font-size: 1.2rem; box-shadow: 0 0 20px rgba(0, 255, 0, 0.2);">
                ✓
            </div>
            
            <h1 class="success-h1 reveal">WELCOME TO <br><span class="outline-text">THE TRIBE</span></h1>
            
            <p class="reveal" style="color: var(--dim); margin-bottom: 4rem; line-height: 1.8; font-size: 1rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                YOUR REGISTRATION FOR <strong>{{ strtoupper($booking->danceClass->name) }}</strong> IS CONFIRMED. A RECEIPT HAS BEEN SENT TO <strong>{{ strtoupper($booking->student_email) }}</strong>.
            </p>

            <div class="card reveal" style="padding: clamp(1.5rem, 4vw, 3rem); margin-bottom: 4rem; text-align: left;">
                <div class="corner-mark mark-tl"></div>
                <div class="corner-mark mark-tr"></div>
                <div class="corner-mark mark-bl"></div>
                <div class="corner-mark mark-br"></div>
                
                <p style="font-size: 0.55rem; color: var(--dim); font-family: 'Syncopate', sans-serif; letter-spacing: 3px; margin-bottom: 2rem; border-bottom: 1px solid var(--border); padding-bottom: 1rem;">BOOKING DETAILS</p>
                
                <div class="success-booking-row">
                    <span style="color: var(--dim); font-family: 'Syncopate', sans-serif; font-size: 0.6rem; letter-spacing: 1px;">TRANSACTION ID</span>
                    <span style="font-family: monospace; letter-spacing: 1.5px;">{{ $booking->transaction_id }}</span>
                </div>
                
                <div class="success-booking-row">
                    <span style="color: var(--dim); font-family: 'Syncopate', sans-serif; font-size: 0.6rem; letter-spacing: 1px;">AMOUNT PAID</span>
                    <span style="font-weight: 800; color: var(--fg);">{{ $booking->amount_paid }}</span>
                </div>
                
                <div class="success-booking-row">
                    <span style="color: var(--dim); font-family: 'Syncopate', sans-serif; font-size: 0.6rem; letter-spacing: 1px;">SLOT CATEGORY</span>
                    <span style="font-weight: 700;">{{ strtoupper($booking->priceOption->label) }}</span>
                </div>

                <div class="success-booking-row">
                    <span style="color: var(--dim); font-family: 'Syncopate', sans-serif; font-size: 0.6rem; letter-spacing: 1px;">QUANTITY</span>
                    <span style="font-weight: 700;">{{ $booking->slots }} {{ $booking->slots > 1 ? 'SLOTS' : 'SLOT' }}</span>
                </div>
            </div>

            <div class="reveal" style="transition-delay: 0.2s;">
                <a href="{{ route('home') }}" class="btn" style="padding: 1rem 3rem; font-size: 0.8rem; letter-spacing: 2px;">BACK TO HOME</a>
                <p style="margin-top: 2.5rem; font-size: 0.6rem; color: var(--dim); font-family: 'Syncopate', sans-serif; letter-spacing: 1px;">NEED HELP? CONTACT +91 96024 16361</p>
            </div>
        </div>
    </section>
@endsection
