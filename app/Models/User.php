<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ArcReference;
use App\Models\ArtReference;
use App\Models\ArcPortfolio;
use App\Models\ArtPortfolio;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Relationship to each model
    public function arcReferences() {
        $this->hasMany(ArcReference::class, 'user_id');
    }
    
    public function artReference() {
        $this->hasMany(ArtReference::class, 'user_id');
    }
    
    public function arcPortfolio() {
        $this->hasMany(ArcPortfolio::class, 'user_id');
    }
    
    public function artPortfolio() {
        $this->hasMany(ArtPortfolio::class, 'user_id');
    }
}
