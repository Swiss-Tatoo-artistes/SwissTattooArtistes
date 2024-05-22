<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    use HasFactory;

    // Relationships
    public function tattooArtists(): BelongsToMany
    {
        return $this->belongsToMany(TattooArtist::class, 'language_tattoo_artist');
    }

    public function traductions(): HasMany
    {
        return $this->hasMany(Traduction::class);
    }
}
