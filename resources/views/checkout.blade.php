@extends('layouts.app')

@section('title', 'Checkout | GOATED JAIPUR')

@section('content')
    <style>
        .checkout-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: clamp(2rem, 5vw, 5rem);
            max-width: 1100px;
            margin: 0 auto;
            align-items: start;
        }

        .checkout-header {
            font-size: clamp(1.8rem, 4vw, 2.5rem);
            margin-bottom: 2rem;
            letter-spacing: -1px;
            line-height: 1;
        }

        .summary-card {
            background: #0a0a0a;
            border: 1px solid var(--border);
            padding: clamp(1.5rem, 3vw, 2.5rem);
            position: relative;
        }

        .input-minimal {
            width: 100%;
            background: #0d0d0d;
            border: 1px solid var(--border);
            padding: 1rem 1.2rem;
            color: #fff;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            transition: var(--transition);
            margin-top: 0.5rem;
        }

        .input-minimal:focus {
            outline: none;
            border-color: var(--fg);
            background: #111;
        }

        .form-label-minimal {
            font-family: 'Syncopate', sans-serif;
            font-size: 0.6rem;
            letter-spacing: 2px;
            color: var(--dim);
            text-transform: uppercase;
        }

        .price-breakdown {
            margin-top: 2rem;
            padding: 1.5rem;
            background: rgba(255,255,255,0.02);
            border: 1px solid rgba(255,255,255,0.05);
        }

        .total-row {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 900px) {
            .checkout-grid {
                grid-template-columns: 1fr;
            }
            .checkout-section {
                padding-top: 8rem !important;
            }
        }

        @media (max-width: 480px) {
            .checkout-header {
                font-size: 1.8rem;
            }
            .total-row h4 {
                font-size: 1.5rem !important;
            }
        }
    </style>

    <section class="checkout-section" style="padding: clamp(8rem, 15vh, 12rem) 5% 6rem;">
        <div class="checkout-grid">
            
            <!-- Summary Column -->
            <div class="reveal">
                <h2 class="checkout-header">YOUR<br><span class="outline-text">REGISTRATION</span></h2>
                
                <div class="summary-card">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>

                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem;">{{ strtoupper($class->name) }}</h3>
                    <p style="font-size: 0.75rem; color: var(--dim); font-family: 'Syncopate', sans-serif; letter-spacing: 1px;">
                        {{ strtoupper($class->schedule) }} — {{ strtoupper($class->instructor) }}
                    </p>

                    <div class="price-breakdown">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.8rem; color: var(--dim);">{{ strtoupper($price->label) }}</span>
                            <span style="font-weight: 700; font-size: 1rem;">{{ $price->price }}</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.8rem; color: var(--dim);">QUANTITY</span>
                            <span id="displayQuantity" style="font-weight: 700; font-size: 1rem;">1</span>
                        </div>
                        @if($price->condition)
                            <p style="font-size: 0.55rem; color: #ff3e3e; letter-spacing: 1px; font-weight: 700;">* {{ strtoupper($price->condition) }}</p>
                        @endif
                    </div>

                    <div class="total-row">
                        <div>
                            <span class="form-label-minimal" style="display: block; margin-bottom: 0.2rem;">TOTAL AMOUNT</span>
                            <span style="font-size: 0.6rem; color: var(--dim);">TAXES INCLUDED</span>
                        </div>
                        <h4 id="totalDisplay" style="font-size: 2.2rem; margin: 0; font-weight: 900; letter-spacing: -1px;">{{ $price->price }}</h4>
                    </div>
                </div>
            </div>

            <!-- Form Column -->
            <div class="reveal" style="transition-delay: 0.1s;">
                <h2 class="checkout-header">STUDENT<br><span class="outline-text">DETAILS</span></h2>

                @if(session('error'))
                    <div style="background: rgba(255, 62, 62, 0.1); border: 1px solid #ff3e3e; color: #ff3e3e; padding: 1.2rem; margin-bottom: 2rem; font-size: 0.8rem; letter-spacing: 1px;">
                        {{ strtoupper(session('error')) }}
                    </div>
                @endif

                <form id="checkoutForm" action="{{ route('checkout.process', [$class->id, $price->id]) }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 1.5rem;">
                        <label class="form-label-minimal">Full Name</label>
                        <input type="text" name="name" required placeholder="JOHN DOE" value="{{ old('name') }}" class="input-minimal">
                    </div>
                    
                    <div style="margin-bottom: 1.5rem;">
                        <label class="form-label-minimal">Email Address</label>
                        <input type="email" name="email" required placeholder="HELLO@EXAMPLE.COM" value="{{ old('email') }}" class="input-minimal">
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2rem;">
                        <div>
                            <label class="form-label-minimal">Phone Number</label>
                            <input type="text" name="phone" required placeholder="+91 XXXXX XXXXX" value="{{ old('phone') }}" class="input-minimal">
                        </div>
                        <div>
                            <label class="form-label-minimal">Quantity (Max: {{ $price->available_slots }})</label>
                            <input type="number" id="quantity" name="quantity" required min="1" max="{{ $price->available_slots }}" value="1" class="input-minimal">
                        </div>
                    </div>

                    <div style="margin-top: 4rem; border-top: 1px solid var(--border); padding-top: 2rem;">
                        <p style="font-size: 0.65rem; color: var(--dim); margin-bottom: 2rem; line-height: 1.8; letter-spacing: 0.5px;">
                            BY PROCEEDING, YOU AGREE TO OUR TERMS OF SERVICE AND PRIVACY POLICY. YOU WILL BE REDIRECTED TO A SECURE SIMULATED PAYMENT GATEWAY TO COMPLETE YOUR BOOKING.
                        </p>
                        <button type="submit" class="btn" style="width: 100%; text-align: center; font-size: 0.8rem; letter-spacing: 2px;">CONFIRM & PAY</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <script>
        const quantityInput = document.getElementById('quantity');
        const displayQuantity = document.getElementById('displayQuantity');
        const totalDisplay = document.getElementById('totalDisplay');
        const basePrice = {{ (int) str_replace(['₹', ','], '', $price->price) }};

        quantityInput.addEventListener('input', function() {
            let qty = parseInt(this.value) || 1;
            let max = parseInt(this.max);
            
            if(qty > max) {
                qty = max;
                this.value = max;
            }
            if(qty < 1) {
                qty = 1;
                this.value = 1;
            }

            displayQuantity.textContent = qty;
            totalDisplay.textContent = '₹' + (qty * basePrice).toLocaleString();
        });
    </script>
@endsection
