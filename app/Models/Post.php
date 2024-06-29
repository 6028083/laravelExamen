<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_title',
        'post_slug',
        'post_content',
        'featured_image',
    ];
    // Accessor om de volledige URL van de afbeelding te krijgen
    public function getFeaturedImageUrlAttribute()
    {
        // Controleer of de featured_image een volledige URL is
        if (filter_var($this->featured_image, FILTER_VALIDATE_URL)) {
            return $this->featured_image;
        }

        // Anders, neem aan dat het een lokaal pad is
        return asset('storage/images/post_images/' . $this->featured_image);
    }
}
