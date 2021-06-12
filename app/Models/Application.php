<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    use HasFactory;

    public function user() : BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function responses() : HasMany
    {
        return $this->hasMany(Response::class);
    }
}
