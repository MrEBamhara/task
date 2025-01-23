<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->json('header')->nullable(); // Stores logo and navigation links
            $table->json('hero')->nullable(); // Stores heading, subheading, image, and highlights
            $table->json('about')->nullable(); // About section details
            $table->json('features')->nullable(); // Features section
            $table->json('testimonials')->nullable(); // Testimonials section
            $table->json('services')->nullable(); // Services section
            $table->json('pricing_plans')->nullable(); // Pricing section
            $table->json('faq')->nullable(); // FAQ section
            $table->json('contact')->nullable(); // Contact info
            $table->json('footer')->nullable(); // Footer text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landing_pages');
    }
};
