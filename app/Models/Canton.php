<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Canton extends Model
{
    use HasFactory;

    // Relationships
    public function adresses(): HasMany
    {
        return $this->hasMany(Canton::class);
    }

    public function traductions(): HasMany
    {
        return $this->hasMany(Traduction::class);
    }

}
