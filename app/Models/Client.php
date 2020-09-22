<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'document', 'phone', 'nationality_id'];

    public function nationality(): BelongsTo
    {
        return $this->belongsTo(Nationality::class);
    }

    public function rental(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}
