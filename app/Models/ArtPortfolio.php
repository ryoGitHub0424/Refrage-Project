<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtPortfolio extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'thumbnail', 'file', 'concept'];
}
