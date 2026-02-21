<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\StepFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Step extends Model
{
    /** @use HasFactory<StepFactory> */
    use HasFactory;

    protected $attributes = [
        'is_completed' => false,
    ];

    public function isCompleted() : Attribute{
         return Attribute::make(
             get : fn() => $this->attributes['is_completed'],
             set : fn($value) => $this->attributes['is_completed'] = $value,
         );
    }

    public function idea(): BelongsTo
    {
        return $this->belongsTo(Idea::class);
    }
}
