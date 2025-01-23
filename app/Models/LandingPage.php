<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'header',         // Ensure 'header' is listed here
        'title',
        'subtitle',
        'content',
        'footer',
        'image',         // Add other attributes you want to allow
    ];
}
