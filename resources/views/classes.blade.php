@extends('layouts.app')

@section('title', 'Training | GOATED JAIPUR')

@section('content')
    <section>
        <h1 class="reveal">TRAIN<br><span class="outline-text">HARDER</span></h1>

        @if (session('error'))
            <div
                style="background: rgba(255, 62, 62, 0.1); border: 1px solid #ff3e3e; color: #ff3e3e; padding: 1.5rem; margin-top: 2rem; font-size: 0.9rem;">
                {{ session('error') }}
            </div>
        @endif

        <div class="grid" style="margin-top: clamp(3rem, 10vh, 5rem);">
            @foreach ($classes as $index => $class)
                <div class="card reveal" style="transition-delay: {{ $index * 0.1 }}s;">
                    <div class="corner-mark mark-tl"></div>
                    <div class="corner-mark mark-tr"></div>
                    <div class="corner-mark mark-bl"></div>
                    <div class="corner-mark mark-br"></div>

                    @if ($class->image)
                        @php
                            $classImagePath = $class->image;
                            if (!Str::startsWith($classImagePath, ['http://', 'https://', 'images/'])) {
                                $classImagePath = 'storage/' . $classImagePath;
                            }
                        @endphp
                        <div
                            style="width: 100%; height: 200px; margin-bottom: 2rem; overflow: hidden; border: 1px solid var(--border);">
                            <img src="{{ asset($classImagePath) }}" alt="{{ $class->name }}"
                                style="width: 100%; height: 100%; object-fit: cover; filter: grayscale(1) brightness(0.8);">
                        </div>
                    @endif

                    <h2 style="font-size: 1.5rem; margin-bottom: 2rem; color: var(--dim);">BATCH 0{{ $index + 1 }}</h2>
                    <h3>{{ strtoupper($class->name) }}</h3>
                    <p>{{ $class->description }}</p>

                    <div
                        style="margin-top: 2rem; padding: 1.5rem; background: rgba(255,255,255,0.03); border: 1px solid var(--border);">
                        <p
                            style="font-size: 0.6rem; color: var(--dim); font-family: 'Syncopate', sans-serif; letter-spacing: 2px; margin-bottom: 1.5rem;">
                            SELECT A SLOT</p>
                        @foreach ($class->prices as $price)
                            <div
                                style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid rgba(255,255,255,0.05);">
                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.8rem; flex-wrap: wrap; gap: 1rem;">
                                    <div style="flex: 1; min-width: 150px;">
                                        <div style="display: flex; align-items: center; gap: 0.8rem; flex-wrap: wrap;">
                                            <span style="font-size: 0.85rem; font-weight: 700;">{{ $price->label }}</span>

                                            @php
                                                $status = $price->status_message;
                                                $statusColor = '#ff3e3e';
                                                if ($status == 'FILLING FAST') {
                                                    $statusColor = '#ff9f00';
                                                }
                                                if ($status == 'SOLD OUT' || $status == 'EXPIRED') {
                                                    $statusColor = '#333';
                                                }
                                            @endphp

                                            @if ($status)
                                                <span
                                                    style="font-size: 0.5rem; background: {{ $statusColor }}; color: {{ $status == 'SOLD OUT' || $status == 'EXPIRED' ? '#999' : '#fff' }}; padding: 0.1rem 0.4rem; font-weight: 900; letter-spacing: 1px;">
                                                    {{ $status }}
                                                </span>
                                            @endif
                                        </div>
                                        <div
                                            style="font-size: 1.1rem; color: var(--fg); font-weight: 800; margin-top: 0.2rem;">
                                            {{ $price->price }}</div>
                                    </div>

                                    @if ($price->isSoldOut() || !$price->isValid())
                                        <button disabled
                                            style="background: #222; border: 1px solid #333; color: #666; padding: 0.6rem 1.2rem; font-size: 0.6rem; cursor: not-allowed; font-weight: 700; letter-spacing: 1px;">
                                            {{ $price->isValid() ? 'SOLD OUT' : 'EXPIRED' }}
                                        </button>
                                    @else
                                        <a href="{{ route('checkout.show', [$class->id, $price->id]) }}" class="btn">REGISTER</a>
                                    @endif
                                </div>

                                <div
                                    style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem;">
                                    @if ($price->condition)
                                        <p
                                            style="font-size: 0.6rem; color: var(--dim); text-transform: uppercase; letter-spacing: 1px;">
                                            * {{ $price->condition }}</p>
                                    @endif
                                    @if ($price->valid_till && $price->isValid())
                                        <p style="font-size: 0.55rem; color: var(--dim); letter-spacing: 1px;">VALID UNTIL:
                                            {{ $price->valid_till->format('M d') }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <p
                        style="margin-top: auto; padding-top: 2rem; font-weight: 700; color: var(--fg); letter-spacing: 1px; font-size: 0.8rem;">
                        {{ strtoupper($class->schedule) }}
                    </p>
                    <p style="font-size: 0.7rem; color: var(--dim); margin-top: 0.5rem;">INSTRUCTOR:
                        {{ strtoupper($class->instructor) }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="reveal">
        <h2>OUR STYLES</h2>
        <div style="display: flex; flex-wrap: wrap; gap: 1rem;">
            @php
                $styles = [
                    'Lyrical Hip Hop',
                    'Popping',
                    'House',
                    'Afro Dance',
                    'Commercial Urban',
                    'Freestyle Training',
                ];
            @endphp
            @foreach ($styles as $style)
                <div
                    style="padding: 1rem 2rem; border: 1px solid var(--border); font-weight: 700; font-size: 0.9rem; letter-spacing: 1px; text-transform: uppercase;">
                    {{ $style }}
                </div>
            @endforeach
        </div>
    </section>

    <section class="reveal" style="text-align: center;">
        <h2>JOIN THE MOVEMENT</h2>
        <p
            style="color: var(--dim); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto; line-height: 1.6;">
            Secure your trial spot today and witness the GOATED standard in person, mentored by elite artists.
        </p>
        <a href="{{ route('contact') }}" class="btn">Book Trial Class</a>
    </section>
@endsection
