<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OpeningTime extends Model
{
    use HasFactory;

    // Relationships
    public function tattooArtist(): BelongsTo
    {
        return $this->belongsTo(TattooArtist::class);
    }

    public function adress(): BelongsTo
    {
        return $this->belongsTo(Adress::class);
    }
}
