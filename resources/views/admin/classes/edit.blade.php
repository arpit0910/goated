@extends('layouts.admin')

@section('content')
    <div style="margin-bottom: 3rem;">
        <h2>EDIT CLASS</h2>
    </div>

    <div class="card" style="max-width: 1050px; padding: 3rem;">
        <div class="corner-mark mark-tl"></div>
        <div class="corner-mark mark-tr"></div>
        <div class="corner-mark mark-bl"></div>
        <div class="corner-mark mark-br"></div>

        <form action="{{ route('admin.classes.update', $class) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">CLASS NAME</label>
                <input type="text" name="name" value="{{ old('name', $class->name) }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">DESCRIPTION</label>
                <textarea name="description" rows="3" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">{{ old('description', $class->description) }}</textarea>
            </div>

            <div class="grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 0; padding: 0;">
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">SCHEDULE</label>
                    <input type="text" name="schedule" value="{{ old('schedule', $class->schedule) }}" placeholder="e.g. Mon, Wed | 6PM" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                </div>
                <div style="margin-bottom: 2rem;">
                    <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">INSTRUCTOR</label>
                    <input type="text" name="instructor" value="{{ old('instructor', $class->instructor) }}" required style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1.2rem; color: #fff;">
                </div>
            </div>

            <div style="margin-bottom: 2rem;">
                <label style="display: block; font-family: 'Syncopate', sans-serif; font-size: 0.6rem; color: var(--dim); margin-bottom: 0.8rem; letter-spacing: 2px;">CLASS IMAGE</label>
                <input type="file" name="image" style="width: 100%; background: #111; border: 1px solid var(--border); padding: 1rem; color: #fff;">
                @if($class->image)
                    @php
                        $classImagePath = $class->image;
                        if (!Str::startsWith($classImagePath, ['http://', 'https://', 'images/'])) {
                            $classImagePath = 'storage/' . $classImagePath;
                        }
                    @endphp
                    <div style="margin-top: 1rem;">
                        <img src="{{ asset($classImagePath) }}" alt="" style="height: 100px; border: 1px solid var(--border);">
                    </div>
                @endif
            </div>

            <div style="margin-top: 3rem; margin-bottom: 1rem; border-top: 1px solid var(--border); padding-top: 2rem;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                    <h3 style="font-size: 0.9rem; letter-spacing: 1px;">PRICING OPTIONS</h3>
                    <button type="button" onclick="addPriceRow()" class="btn" style="padding: 0.5rem 1rem; font-size: 0.6rem;">+ ADD PRICE</button>
                </div>

                <div id="pricing-container">
                    @forelse($class->prices as $index => $price)
                        <div class="price-row" style="display: grid; grid-template-columns: 1.2fr 0.8fr 0.5fr 1fr 1.2fr auto; gap: 1rem; margin-bottom: 1rem; align-items: end;">
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">LABEL</label>
                                <input type="text" name="prices[{{ $index }}][label]" value="{{ $price->label }}" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">PRICE</label>
                                <input type="text" name="prices[{{ $index }}][price]" value="{{ $price->price }}" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">SLOTS</label>
                                <input type="number" name="prices[{{ $index }}][slots]" value="{{ $price->slots }}" placeholder="∞" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">VALID TILL</label>
                                <input type="date" name="prices[{{ $index }}][valid_till]" value="{{ $price->valid_till ? $price->valid_till->format('Y-m-d') : '' }}" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.75rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">CONDITION</label>
                                <input type="text" name="prices[{{ $index }}][condition]" value="{{ $price->condition }}" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div style="height: 42px; display: flex; align-items: center;">
                                <button type="button" class="btn-delete" style="background: none; border: none; color: #ff3e3e; cursor: pointer; padding: 0.5rem;" onclick="removeRow(this)">✕</button>
                            </div>
                        </div>
                    @empty
                        <div class="price-row" style="display: grid; grid-template-columns: 1.2fr 0.8fr 0.5fr 1fr 1.2fr auto; gap: 1rem; margin-bottom: 1rem; align-items: end;">
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">LABEL</label>
                                <input type="text" name="prices[0][label]" placeholder="Regular Price" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">PRICE</label>
                                <input type="text" name="prices[0][price]" placeholder="₹3000" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">SLOTS</label>
                                <input type="number" name="prices[0][slots]" placeholder="∞" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">VALID TILL</label>
                                <input type="date" name="prices[0][valid_till]" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.75rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.5rem; color: var(--dim); margin-bottom: 0.5rem;">CONDITION</label>
                                <input type="text" name="prices[0][condition]" placeholder="No condition" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                            </div>
                            <div style="height: 42px; display: flex; align-items: center;">
                                <button type="button" class="btn-delete" style="background: none; border: none; color: #ff3e3e; cursor: pointer; padding: 0.5rem;" onclick="removeRow(this)">✕</button>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div style="margin-top: 3rem;">
                <button type="submit" class="btn btn-dark" style="padding: 1rem 3rem;">UPDATE CLASS</button>
                <a href="{{ route('admin.classes.index') }}" style="margin-left: 2rem; color: var(--dim); text-decoration: none; font-size: 0.8rem;">CANCEL</a>
            </div>
        </form>
    </div>

    <script>
        let priceIndex = {{ count($class->prices) > 0 ? count($class->prices) : 1 }};
        function addPriceRow() {
            const container = document.getElementById('pricing-container');
            const row = document.createElement('div');
            row.className = 'price-row';
            row.style = 'display: grid; grid-template-columns: 1.2fr 0.8fr 0.5fr 1fr 1.2fr auto; gap: 1rem; margin-bottom: 1rem; align-items: end;';
            row.innerHTML = `
                <div>
                    <input type="text" name="prices[${priceIndex}][label]" placeholder="Price Label" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                </div>
                <div>
                    <input type="text" name="prices[${priceIndex}][price]" placeholder="Price Value" required style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                </div>
                <div>
                    <input type="number" name="prices[${priceIndex}][slots]" placeholder="Slots" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                </div>
                <div>
                    <input type="date" name="prices[${priceIndex}][valid_till]" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.75rem; color: #fff; font-size: 0.8rem;">
                </div>
                <div>
                    <input type="text" name="prices[${priceIndex}][condition]" placeholder="Condition" style="width: 100%; background: #000; border: 1px solid var(--border); padding: 0.8rem; color: #fff; font-size: 0.8rem;">
                </div>
                <div style="height: 42px; display: flex; align-items: center;">
                    <button type="button" class="btn-delete" style="background: none; border: none; color: #ff3e3e; cursor: pointer; padding: 0.5rem;" onclick="removeRow(this)">✕</button>
                </div>
            `;
            container.appendChild(row);
            priceIndex++;
        }

        function removeRow(btn) {
            const row = btn.closest('.price-row');
            if (document.querySelectorAll('.price-row').length > 1) {
                row.remove();
            } else {
                alert('At least one price option is required.');
            }
        }
    </script>
@endsection
