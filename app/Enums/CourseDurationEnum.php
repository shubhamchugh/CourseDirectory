<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum CourseDurationEnum: string
{
    case MINUTES = 'minutes';

    case HOURS = 'hours';

    case DAYS = 'days';

    case WEEKS = 'weeks';

    case MONTHS = 'months';

    public static function getSelectOptions(): Collection
    {
        return collect(CourseDurationEnum::cases())
            ->mapWithKeys(callback: fn (CourseDurationEnum $courseDurationEnum) => [$courseDurationEnum->value => $courseDurationEnum->label()]);
    }

    public function label(): string
    {
        return ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString());
    }
}
