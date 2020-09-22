<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receptionist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'document', 'phone', 'status', 'observation'];

    public function rental(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}
