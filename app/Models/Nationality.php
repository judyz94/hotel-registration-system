<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nationality extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'nationality'];

    public function client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}
