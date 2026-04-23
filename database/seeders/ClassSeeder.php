<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DanceClass;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classes = [
            [
                'name' => 'Hip Hop Foundations',
                'description' => 'Master the core grooves, bounces, and history of Hip Hop culture.',
                'schedule' => 'Mon, Wed, Fri | 6:00 PM - 7:30 PM',
                'instructor' => 'Divyam Vijay',
                'image' => 'classes/hip-hop.jpg',
                'prices' => [
                    ['label' => 'Regular Price', 'price' => '₹3500/month', 'slots' => null],
                    ['label' => 'Early Bird', 'price' => '₹3000/month', 'slots' => 10, 'condition' => 'First 10 Students'],
                ]
            ],
            [
                'name' => 'Urban Choreography',
                'description' => 'Learn intricate routines set to contemporary urban beats.',
                'schedule' => 'Tue, Thu, Sat | 7:00 PM - 8:30 PM',
                'instructor' => 'Elite Crew',
                'image' => 'classes/urban.jpg',
                'prices' => [
                    ['label' => 'Regular Price', 'price' => '₹4000/month', 'slots' => null],
                    ['label' => 'On the spot', 'price' => '₹500/class', 'slots' => 5, 'condition' => 'Single session'],
                ]
            ],
            [
                'name' => 'Popping & Locking',
                'description' => 'The art of muscle contraction and funky locking movements.',
                'schedule' => 'Sat, Sun | 11:00 AM - 1:00 PM',
                'instructor' => 'Street Specialist',
                'image' => 'classes/popping.jpg',
                'prices' => [
                    ['label' => 'Monthly Fee', 'price' => '₹3000/month', 'slots' => null],
                ]
            ]
        ];

        foreach ($classes as $classData) {
            $prices = $classData['prices'];
            unset($classData['prices']);
            
            $class = DanceClass::create($classData);
            
            foreach ($prices as $index => $price) {
                $class->prices()->create([
                    'label' => $price['label'],
                    'price' => $price['price'],
                    'slots' => $price['slots'],
                    'condition' => $price['condition'] ?? null,
                    'order' => $index
                ]);
            }
        }
    }
}
