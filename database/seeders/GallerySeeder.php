<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Main Studio Vibe',
                'description' => 'Our state-of-the-art training ground.',
                'image' => 'images/gallery/studio-1.jpg',
                'type' => 'image',
                'is_featured' => true
            ],
            [
                'title' => 'Elite Workshop 2024',
                'description' => 'Intense session with guest choreographers.',
                'image' => 'images/gallery/workshop-1.jpg',
                'type' => 'image',
                'is_featured' => false
            ],
            [
                'title' => 'Performance Reel',
                'description' => 'Catch our crew in action.',
                'image' => 'images/gallery/reel-1.jpg',
                'type' => 'video',
                'is_featured' => true
            ]
        ];

        foreach ($items as $item) {
            \App\Models\GalleryItem::create($item);
        }
    }
}
