<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtReference extends Model
{
    use HasFactory;
    
    protected $fillable = ['art_name', 'artist_name', 'year', 'location', 'medium', 'image', 'overview'];
}
