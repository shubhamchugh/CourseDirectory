<?php

namespace App\Enums\Course;

use Illuminate\Support\Collection;

enum CourseGroupEnum: string
{
    case COURSE = 'course';

    case DEGREE = 'degree';

    public static function getSelectOptions(): Collection
    {
        return collect(CourseGroupEnum::cases())
            ->mapWithKeys(callback: fn (CourseGroupEnum $courseGroupEnum) => [$courseGroupEnum->value => $courseGroupEnum->label()]);
    }

    public function label(): string
    {
        return ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString());
    }
}
