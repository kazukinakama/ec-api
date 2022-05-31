<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'name',
        'amount',
        'category_id',
        'description',
        'is_published',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class)->orderBy('display_order');
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'likes')->withTimestamps();
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }
}
