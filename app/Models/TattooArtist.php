<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TattooArtist extends Model
{
    use HasFactory;

    // Spécifié le nom de la table afin de faciliter le maintien si changement de nom de table
    protected $table = 'tattoo_artists';

    // Relationships
    public function adresses(): HasMany
    {
        return $this->hasMany(Adress::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'language_tattoo_artist');
    }

    public function OpeningTimes(): HasMany
    {
        return $this->hasMany(OpeningTime::class);
    }

    public function styles(): BelongsToMany
    {
        return $this->belongsToMany(Style::class, 'style_tattoo_artist');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
