<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class ArtReference extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'art_name', 'artist_name', 'year', 'location', 'medium', 'image', 'overview'];
    
    // Relationship to user
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
