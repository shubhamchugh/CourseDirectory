<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum CourseLevelEnum: string
{
    case BEGINNER = 'beginner';

    case INTERMEDIATE = 'intermediate';

    case ADVANCED = 'advanced';

    case PROFESSIONAL = 'professional';

    case ALL_LEVELS = 'all_levels';

    public static function getSelectOptions(): Collection
    {
        return collect(CourseLevelEnum::cases())
            ->mapWithKeys(callback: fn (CourseLevelEnum $courseLevelEnum) => [$courseLevelEnum->value => $courseLevelEnum->label()]);
    }

    public function label(): string
    {
        return ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString());
    }
}
