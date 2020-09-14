<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class);
    }

    public function rental(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}
