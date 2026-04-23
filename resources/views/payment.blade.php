@extends('layouts.app')

@section('title', 'Secure Payment | GOATED JAIPUR')

@section('content')
    <style>
        .payment-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: 
                radial-gradient(circle at 10% 20%, rgba(255,255,255,0.03) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(255,255,255,0.03) 0%, transparent 40%),
                #000;
        }

        .payment-card {
            width: 100%;
            max-width: 480px;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            padding: 0;
            position: relative;
            box-shadow: 0 40px 100px rgba(0,0,0,0.8);
        }

        .payment-header {
            padding: 2.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .payment-body {
            padding: 2.5rem;
        }

        .payment-footer {
            padding: 2rem 2.5rem;
            background: rgba(255, 255, 255, 0.02);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .payment-method {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 1.5rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .payment-method:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.3);
            transform: translateX(5px);
        }

        .payment-method.active {
            background: rgba(255, 255, 255, 0.08);
            border-color: #fff;
        }

        .method-icon {
            width: 45px;
            height: 30px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.5rem;
            font-weight: 900;
        }

        .pay-btn {
            width: 100%;
            background: #fff;
            color: #000;
            border: none;
            padding: 1.5rem;
            font-family: 'Syncopate', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            letter-spacing: 3px;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.68, -0.6, 0.32, 1.6);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            transform: skewX(-10deg);
        }

        .pay-btn:hover {
            background: #000;
            color: #fff;
            transform: skewX(-10deg) scale(1.05) translateY(-5px);
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.5);
            border: 2px solid #fff;
        }

        .loader-dots {
            display: none;
            gap: 4px;
        }

        .loader-dots span {
            width: 4px;
            height: 4px;
            background: #000;
            border-radius: 50%;
            animation: dot-pulse 1s infinite;
        }

        .loader-dots span:nth-child(2) { animation-delay: 0.2s; }
        .loader-dots span:nth-child(3) { animation-delay: 0.4s; }

        @keyframes dot-pulse {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.2); }
        }

        @media (max-width: 480px) {
            .payment-header, .payment-body, .payment-footer {
                padding: 1.5rem;
            }
            .payment-card {
                box-shadow: none;
                background: transparent;
                border: none;
            }
        }
    </style>

    <div class="payment-wrapper">
        <div class="payment-card reveal">
            <div class="corner-mark mark-tl"></div>
            <div class="corner-mark mark-tr"></div>
            <div class="corner-mark mark-bl"></div>
            <div class="corner-mark mark-br"></div>

            <div class="payment-header">
                <div>
                    <h4 style="font-size: 0.6rem; color: var(--dim); letter-spacing: 2px; margin-bottom: 0.5rem;">SECURE CHECKOUT</h4>
                    <h3 style="font-size: 1.1rem; margin: 0; font-family: 'Syncopate', sans-serif;">GOATED STUDIO</h3>
                </div>
                <div style="text-align: right;">
                    <h4 style="font-size: 0.6rem; color: var(--dim); letter-spacing: 2px; margin-bottom: 0.5rem;">AMOUNT</h4>
                    <h3 style="font-size: 1.5rem; margin: 0; font-weight: 900;">{{ $booking->amount_paid }}</h3>
                </div>
            </div>

            <div class="payment-body">
                <p style="font-size: 0.6rem; color: var(--dim); font-family: 'Syncopate', sans-serif; letter-spacing: 1px; margin-bottom: 1.5rem;">SELECT METHOD</p>
                
                <div class="payment-method active">
                    <div class="method-icon">UPI</div>
                    <div>
                        <p style="font-size: 0.8rem; font-weight: 700; margin: 0; letter-spacing: 0.5px;">UPI / QR</p>
                        <p style="font-size: 0.6rem; color: var(--dim); margin: 0;">GPAY, PHONEPE, PAYTM</p>
                    </div>
                </div>

                <div class="payment-method">
                    <div class="method-icon">CARD</div>
                    <div>
                        <p style="font-size: 0.8rem; font-weight: 700; margin: 0; letter-spacing: 0.5px;">CREDIT / DEBIT</p>
                        <p style="font-size: 0.6rem; color: var(--dim); margin: 0;">VISA, MASTERCARD, RUPAY</p>
                    </div>
                </div>

                <div class="payment-method">
                    <div class="method-icon">NB</div>
                    <div>
                        <p style="font-size: 0.8rem; font-weight: 700; margin: 0; letter-spacing: 0.5px;">NET BANKING</p>
                        <p style="font-size: 0.6rem; color: var(--dim); margin: 0;">ALL MAJOR INDIAN BANKS</p>
                    </div>
                </div>
            </div>

            <div class="payment-footer">
                <form id="payForm" action="{{ route('checkout.success', $booking) }}" method="GET">
                    <button type="submit" class="pay-btn" onclick="processPayment(event)">
                        <div class="loader-dots" id="loader">
                            <span></span><span></span><span></span>
                        </div>
                        <span id="btnText">CONFIRM & PAY</span>
                    </button>
                </form>
                <div style="margin-top: 1.5rem; display: flex; justify-content: center; align-items: center; gap: 0.8rem; opacity: 0.3;">
                    <span style="font-size: 0.5rem; font-family: 'Syncopate', sans-serif; letter-spacing: 1px; font-weight: 700;">ENCRYPTED VIA GOATED GATEWAY</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function processPayment(e) {
            e.preventDefault();
            const btn = document.getElementById('btnText');
            const loader = document.getElementById('loader');
            const form = document.getElementById('payForm');
            
            btn.style.display = 'none';
            loader.style.display = 'flex';
            
            setTimeout(() => {
                form.submit();
            }, 3000);
        }
    </script>
@endsection
