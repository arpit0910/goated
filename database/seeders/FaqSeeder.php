<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'Do I need dance experience to join GOATED?',
                'answer' => 'No. Beginners can start with foundation-focused batches, while experienced dancers can move into choreography, freestyle, and elite training tracks.',
                'order' => 1
            ],
            [
                'question' => 'What styles do you teach?',
                'answer' => 'We train in Hip Hop foundations, lyrical hip hop, popping, house, afro, commercial urban, freestyle, and performance choreography.',
                'order' => 2
            ],
            [
                'question' => 'Can I book choreography for weddings or events?',
                'answer' => 'Yes. The team creates custom choreography for weddings, school and college events, brand launches, artist sets, stage shows, and social media shoots.',
                'order' => 3
            ],
            [
                'question' => 'How do I book a trial class?',
                'answer' => 'Use the contact page and share your level, preferred batch, and schedule. The GOATED team will help you pick the right training slot.',
                'order' => 4
            ]
        ];

        foreach ($faqs as $faq) {
            \App\Models\Faq::create($faq);
        }
    }
}
