<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Adress extends Model
{
    use HasFactory;

    // Relationships
    public function tattooArtist(): BelongsTo
    {
        return $this->belongsTo(TattooArtist::class);
    }

    public function canton(): BelongsTo
    {
        return $this->belongsTo(Canton::class);
    }

    public function openingTime(): HasMany
    {
        return $this->hasMany(OpeningTime::class);
    }
}
