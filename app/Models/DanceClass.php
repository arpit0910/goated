<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanceClass extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function prices()
    {
        return $this->hasMany(ClassPrice::class)->orderBy('order');
    }
}
