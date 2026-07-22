<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the catering services page.
     * Theme: White, Brown, and Golden Luxury
     */
    public function index()
    {
        $packages = [
            [
                'id' => 'silver',
                'category' => 'silver',
                'title' => 'Silver Package',
                'tag' => 'Essential Luxury',
                'price_per_person' => 45,
                'description' => 'A sophisticated catering spread perfect for intimate gatherings, dinner parties, and corporate luncheons.',
                'features' => [
                    '3-Course Gourmet Buffet or Plated Selection',
                    'Professional Service Staff & On-site Setup',
                    'Porcelain Tableware, Crystal Glassware & Fine Linens',
                    'Signature Welcome Mocktail & Tea/Coffee Station'
                ]
            ],
            [
                'id' => 'gold',
                'category' => 'gold',
                'title' => 'Gold Package',
                'tag' => 'Most Popular',
                'price_per_person' => 75,
                'description' => 'An opulent 5-course banquet featuring live appetizer counters, premium table styling, and dedicated butler service.',
                'features' => [
                    '5-Course Fine Dining Menu with Customized Selections',
                    '2 Live Interactive Cooking Stations (Pasta / Chaat / Dim Sum)',
                    'Executive Chef On-Site & Dedicated Personal Butlers',
                    'Gold-Rimmed Glassware & Silk Linen Accent Napkins'
                ]
            ],
            [
                'id' => 'royal',
                'category' => 'royal',
                'title' => 'Royal Gold Banquet',
                'tag' => 'Grand Celebration',
                'price_per_person' => 120,
                'description' => 'The ultimate luxury catering experience designed for grand wedding receptions and high-profile galas.',
                'features' => [
                    '7-Course Ultra-Luxury Tasting & Grand Buffet Spread',
                    '4 Live Interactive Stations & Gold Artisanal Mixology Bar',
                    'Grand Dessert Wall Display & Ice Sculpture Centerpiece',
                    'VIP Tasting Session for 6 Guests Prior to Event'
                ]
            ],
            [
                'id' => 'custom',
                'category' => 'custom',
                'title' => 'Custom Bespoke',
                'tag' => 'Fully Tailored',
                'price_per_person' => 95,
                'description' => 'Build your personalized culinary experience tailored to specific dietary requirements or ethnic cuisines.',
                'features' => [
                    'Bespoke Menu Designed with Culinary Director',
                    '100% Organic, Jain, Pure Vegan, or Fusion Selections',
                    'Flexible Guest Count & Tailored Service Levels'
                ]
            ]
        ];

        $addons = [
            ['name' => 'Gold Mixology Bar', 'price' => 15],
            ['name' => 'Grand Dessert Wall', 'price' => 12],
            ['name' => 'Royal Chaat Street', 'price' => 10],
            ['name' => 'Japanese Teppanyaki', 'price' => 18]
        ];

        return view('services.index', compact('packages', 'addons'));
    }
}
