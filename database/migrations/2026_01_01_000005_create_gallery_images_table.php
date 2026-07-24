<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('path');
            $table->boolean('is_local')->default(false);
            $table->timestamps();
        });

        // Seed initial 12 gallery images
        DB::table('gallery_images')->insert([
            [
                'title' => 'Royal Buffet Presentation',
                'category' => 'weddings',
                'path' => 'https://images.unsplash.com/photo-1555244162-803834f70033?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gourmet Mixology Counter',
                'category' => 'live-stations',
                'path' => 'https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gold Fine-Dine Table Setup',
                'category' => 'cuisine',
                'path' => 'https://images.unsplash.com/photo-1532635249-90c128818ec6?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Celebration Cake Lounge',
                'category' => 'cuisine',
                'path' => 'https://images.unsplash.com/photo-1578985545062-69928b1d9587?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pristine Kitchen Setup',
                'category' => 'kitchen',
                'path' => 'https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Wedding Banquet Decor',
                'category' => 'weddings',
                'path' => 'https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Live Lakhnavi Chaat Hub',
                'category' => 'live-stations',
                'path' => 'https://images.unsplash.com/photo-1585937421612-70a008356fbe?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Zafrani Paneer Platter',
                'category' => 'cuisine',
                'path' => 'https://images.unsplash.com/photo-1546833999-b9f581a1996d?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Imperial Table Lineup',
                'category' => 'weddings',
                'path' => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Live Juice Station',
                'category' => 'live-stations',
                'path' => 'https://images.unsplash.com/photo-1534353436294-0dbd4bdac845?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sanitized Prep Area',
                'category' => 'kitchen',
                'path' => 'https://images.unsplash.com/photo-1595273670150-db0a3e368157?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'French Macaron Towers',
                'category' => 'cuisine',
                'path' => 'https://images.unsplash.com/photo-1506084868230-bb9d95c24759?q=80&w=800&auto=format&fit=crop',
                'is_local' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
    }
};
