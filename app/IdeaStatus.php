<?php

declare(strict_types=1);

namespace App;

use phpDocumentor\Reflection\Types\Static_;

enum IdeaStatus: string
{
    case PENDING = 'pending';
    case IN_PROGRESS = 'in_progress';
    case COMPLETED = 'completed';

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'Pending',
            self::IN_PROGRESS => 'In Progress',
            self::COMPLETED => 'Completed',
        };
    }

    public static function values(): array
    {
        return array_map(fn($status) => $status->value, static::cases());
    }
}
