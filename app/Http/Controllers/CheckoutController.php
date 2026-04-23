<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanceClass;
use App\Models\ClassPrice;
use App\Models\Booking;
use App\Models\Student;

class CheckoutController extends Controller
{
    public function show(DanceClass $class, ClassPrice $price)
    {
        if ($price->isSoldOut() || !$price->isValid()) {
            return redirect()->route('classes')->with('error', 'Sorry, this slot is no longer available.');
        }

        return view('checkout', compact('class', 'price'));
    }

    public function process(Request $request, DanceClass $class, ClassPrice $price)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'quantity' => 'required|integer|min:1'
        ]);

        $quantity = (int)$request->quantity;

        if ($price->isSoldOut() || !$price->isValid() || $quantity > $price->available_slots) {
            return back()->with('error', 'Sorry, the requested slots are no longer available.');
        }

        $totalPrice = (int)str_replace(['₹', ','], '', $price->price) * $quantity;

        $booking = Booking::create([
            'dance_class_id' => $class->id,
            'class_price_id' => $price->id,
            'student_name' => $request->name,
            'student_email' => $request->email,
            'student_phone' => $request->phone,
            'amount_paid' => '₹' . number_format($totalPrice),
            'slots' => $quantity,
            'payment_status' => 'pending',
            'transaction_id' => 'TXN_' . strtoupper(bin2hex(random_bytes(8))),
            'payment_details' => []
        ]);

        return redirect()->route('checkout.payment', $booking);
    }

    public function payment(Booking $booking)
    {
        if ($booking->payment_status === 'completed') {
            return redirect()->route('checkout.success', $booking);
        }

        return view('payment', compact('booking'));
    }

    public function success(Booking $booking)
    {
        if ($booking->payment_status === 'pending') {
            $booking->update([
                'payment_status' => 'completed',
                'payment_details' => [
                    'method' => 'Razorpay Simulator',
                    'timestamp' => now()->toDateTimeString()
                ]
            ]);

            // Create student record only after successful payment
            Student::firstOrCreate(
                ['email' => $booking->student_email],
                [
                    'name' => $booking->student_name,
                    'phone' => $booking->student_phone,
                    'dance_class_id' => $booking->dance_class_id,
                    'status' => 'active',
                    'notes' => 'Registered via website (Slots: ' . $booking->slots . ')'
                ]
            );
        }

        return view('checkout-success', compact('booking'));
    }
}
