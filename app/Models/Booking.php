<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'dance_class_id',
        'class_price_id',
        'student_name',
        'student_email',
        'student_phone',
        'amount_paid',
        'payment_status',
        'transaction_id',
        'slots',
        'payment_details'
    ];

    protected $casts = [
        'payment_details' => 'array'
    ];

    public function danceClass()
    {
        return $this->belongsTo(DanceClass::class);
    }

    public function priceOption()
    {
        return $this->belongsTo(ClassPrice::class, 'class_price_id');
    }
}
