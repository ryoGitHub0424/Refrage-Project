<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ArcReference extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','architecture_name', 'architect_name', 'year', 'location', 'how', 'image', 'overview'];
    
    public function user() {
        return $this->belongTo(User::class, 'user_id');
    }
}
