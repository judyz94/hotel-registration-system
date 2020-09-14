<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    public function type(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }

    public function rental(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}
