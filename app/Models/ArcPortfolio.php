<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ArcPortfolio extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id','user_name', 'title', 'thumbnail', 'file', 'concept'];
    
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
