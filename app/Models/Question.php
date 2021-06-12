<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $appends = [
        'type_and_text',
    ];

    public function responses() : HasMany
    {
        return $this->hasMany(Response::class);
    }



    public function scopeType(Builder $query, string $type) : Builder
    {
        return $query->where('type', $type);
    }

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getTypeAndTextAttribute()
    {
        return $this->type . ':' . $this->text;
    }

}
