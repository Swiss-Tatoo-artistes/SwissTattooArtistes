<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Style extends Model
{
    use HasFactory;

    // Relationships
    public function traductions(): HasMany
    {
        return $this->hasMany(Traduction::class);
    }

    public function tattooArtists(): BelongsToMany
    {
        return $this->belongsToMany(TattooArtist::class, 'style_tattoo_artist');
    }
}
