<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;


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

    // Mutator for 'name' attribute
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = Str::of($value)->lower()->ascii();
    }
}
