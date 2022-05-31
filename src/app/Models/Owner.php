<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use PHPOpenSourceSaver\JWTAuth\Contracts\JWTSubject;

class Owner extends Authenticatable implements JWTSubject
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'zipcode',
        'prefecture',
        'city',
        'street_address',
        'tel',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function getJWTIdentifier(): mixed
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims(): array
    {
        return [];
    }
}
