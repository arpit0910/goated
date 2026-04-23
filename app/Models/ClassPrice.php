<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ClassPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'valid_till' => 'date'
    ];

    public function danceClass()
    {
        return $this->belongsTo(DanceClass::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'class_price_id');
    }

    public function getAvailableSlotsAttribute()
    {
        if ($this->slots === null) {
            return 999; // Unlimited
        }

        $usedSlots = $this->bookings()->where('payment_status', 'completed')->sum('slots');
        return max(0, $this->slots - $usedSlots);
    }

    public function isValid()
    {
        if ($this->valid_till === null) {
            return true;
        }

        return Carbon::now()->startOfDay()->lte($this->valid_till);
    }

    public function isSoldOut()
    {
        if ($this->slots === null) {
            return false;
        }

        return $this->available_slots <= 0;
    }

    public function getStatusMessageAttribute()
    {
        if (!$this->isValid()) {
            return 'EXPIRED';
        }

        if ($this->isSoldOut()) {
            return 'SOLD OUT';
        }

        if ($this->slots !== null && $this->available_slots <= 3) {
            return 'ENDING SOON';
        }

        if ($this->slots !== null && $this->available_slots <= ($this->slots * 0.3)) {
            return 'FILLING FAST';
        }

        if ($this->valid_till !== null) {
            $daysLeft = Carbon::now()->diffInDays($this->valid_till, false);
            if ($daysLeft >= 0 && $daysLeft <= 2) {
                return 'EXPIRES SOON';
            }
        }

        return null;
    }
}
