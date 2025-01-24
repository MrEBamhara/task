<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',
        'hero',
        'about',
        'features',
        'testimonials',
        'services',
        'pricing_plans',
        'faq',
        'contact',
        'footer',
    ];

    protected $casts = [
        'header' => 'array',
        'hero' => 'array',
        'about' => 'array',
        'features' => 'array',
        'testimonials' => 'array',
        'services' => 'array',
        'pricing_plans' => 'array',
        'faq' => 'array',
        'contact' => 'array',
        'footer' => 'array',
    ];


}
