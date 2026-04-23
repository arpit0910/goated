<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonials = [
            [
                'student_name' => 'ARYAN K.',
                'content' => "GOATED isn't just a studio; it's where I found my movement and my family. The training is intense but the growth is real."
            ],
            [
                'student_name' => 'PRIYA S.',
                'content' => "The focus on foundations here changed everything for me. I went from just doing steps to actually dancing."
            ]
        ];

        foreach ($testimonials as $testimonial) {
            \App\Models\Testimonial::create($testimonial);
        }
    }
}
