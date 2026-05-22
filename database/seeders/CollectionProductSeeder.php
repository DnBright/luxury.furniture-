<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Lena Collection
        $lena = \App\Models\Collection::create([
            'name' => 'LENA COLLECTION',
            'designer' => 'Made Studio',
            'description' => 'A collection of architectural lines that seamlessly blend premium teak warmth with state-of-the-art aluminum elegance. Engineered for ultimate outdoor luxury.',
            'image_path' => 'assets/images/lena_collection.png',
            'slug' => 'lena'
        ]);

        $lena->products()->createMany([
            [
                'name' => 'Lena Lounge Chair',
                'description' => 'Crafted with premium sustainably harvested teak and weather-resistant high-performance outdoor fabric cushions. Architectural frame with superior comfort.',
                'price' => '$1,450',
                'material' => 'Sustainably Harvested Teak & Sunbrella Fabric',
                'dimensions' => '85cm W x 90cm D x 75cm H',
                'image_path' => 'assets/images/lena_collection.png'
            ],
            [
                'name' => 'Lena Outdoor Sofa',
                'description' => 'A magnificent three-seater outdoor sofa featuring a massive premium teak frame and generous deep-seating cushions for peak relaxation.',
                'price' => '$3,800',
                'material' => 'Sustainably Harvested Teak & Sunbrella Fabric',
                'dimensions' => '220cm W x 95cm D x 75cm H',
                'image_path' => 'assets/images/lena_collection.png'
            ],
            [
                'name' => 'Lena Low Coffee Table',
                'description' => 'A sculptural low-profile outdoor coffee table blending a solid teak frame with a beautiful honed Italian Travertine marble top.',
                'price' => '$1,100',
                'material' => 'Solid Teak & Honed Travertine Marble',
                'dimensions' => '120cm W x 70cm D x 35cm H',
                'image_path' => 'assets/images/lena_collection.png'
            ]
        ]);

        // 2. Aeris Collection
        $aeris = \App\Models\Collection::create([
            'name' => 'AERIS COLLECTION',
            'designer' => 'Mario Ruiz',
            'description' => 'Circular lounge daybeds and accent furniture featuring hand-woven performance cord and soft pastel coral aesthetics inspired by the Mediterranean.',
            'image_path' => 'assets/images/aeris_collection.png',
            'slug' => 'aeris'
        ]);

        $aeris->products()->createMany([
            [
                'name' => 'Aeris Circular Daybed',
                'description' => 'A majestic circular daybed with an intricate hand-woven performance cord backrest and plush cloud-like coral cushions. Features a built-in rotating base.',
                'price' => '$4,200',
                'material' => 'Performance Rope, Stainless Steel Frame & Sunbrella Fabric',
                'dimensions' => '160cm Diameter x 85cm H',
                'image_path' => 'assets/images/aeris_collection.png'
            ],
            [
                'name' => 'Aeris Accent Side Table',
                'description' => 'An elegant circular outdoor side table featuring a brushed bronze base and a hand-finished luxury ceramic top.',
                'price' => '$750',
                'material' => 'Brushed Bronze Powder-coated Steel & Italian Ceramic',
                'dimensions' => '45cm Diameter x 50cm H',
                'image_path' => 'assets/images/aeris_collection.png'
            ]
        ]);

        // 3. Arc Alum Collection
        $arcAlum = \App\Models\Collection::create([
            'name' => 'ARC ALUM COLLECTION',
            'designer' => 'Mario Ruiz',
            'description' => 'Ultra-sleek, powder-coated high-grade aluminum framing engineered for architectural structural strength and ultimate modern penthouse luxury.',
            'image_path' => 'assets/images/arc_alum_collection.png',
            'slug' => 'arc-alum'
        ]);

        $arcAlum->products()->createMany([
            [
                'name' => 'Arc Alum L-Sectional',
                'description' => 'An impressive, modular outdoor corner sectional sofa made from aerospace-grade aluminum and finished in deep textured charcoal.',
                'price' => '$6,400',
                'material' => 'Aerospace Powder-coated Aluminum & Charcoal High-density Cushions',
                'dimensions' => '310cm W x 240cm D x 70cm H',
                'image_path' => 'assets/images/arc_alum_collection.png'
            ],
            [
                'name' => 'Arc Alum Minimalist Coffee Table',
                'description' => 'A clean-lined cast aluminum low table designed to match the Arc Alum sectional. Water-resistant, light, and virtually indestructible.',
                'price' => '$1,250',
                'material' => 'Textured Cast Aluminum',
                'dimensions' => '100cm W x 100cm D x 30cm H',
                'image_path' => 'assets/images/arc_alum_collection.png'
            ]
        ]);

        // 4. Arc Teak Collection
        $arcTeak = \App\Models\Collection::create([
            'name' => 'ARC TEAK COLLECTION',
            'designer' => 'Mario Ruiz',
            'description' => 'Beautiful, sustainably-sourced Grade-A teak timber masterfully crafted for timeless outdoor dining. The perfect combination of luxury and durability.',
            'image_path' => 'assets/images/arc_teak_collection.png',
            'slug' => 'arc-teak'
        ]);

        $arcTeak->products()->createMany([
            [
                'name' => 'Arc Teak Dining Table',
                'description' => 'A grand solid teak dining table designed to accommodate up to 8 guests. Features beautifully radiused corners and architectural tapered legs.',
                'price' => '$3,200',
                'material' => 'Grade-A Sustainably Sourced Teak Wood',
                'dimensions' => '240cm W x 100cm D x 75cm H',
                'image_path' => 'assets/images/arc_teak_collection.png'
            ],
            [
                'name' => 'Arc Woven Dining Chair',
                'description' => 'A comfortable, low-slung outdoor dining chair combining a beautiful teak frame with a supportive, double-woven Olefin rope seat and back.',
                'price' => '$850',
                'material' => 'Grade-A Teak & Woven Olefin Rope',
                'dimensions' => '60cm W x 58cm D x 80cm H',
                'image_path' => 'assets/images/arc_teak_collection.png'
            ]
        ]);
    }
}
