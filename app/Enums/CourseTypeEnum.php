<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum CourseTypeEnum: string
{
    case COURSE = 'course';

    case DEGREE = 'degree';

    public static function getSelectOptions(): Collection
    {
        return collect(CourseTypeEnum::cases())
            ->mapWithKeys(callback: fn (CourseTypeEnum $courseTypeEnum) => [$courseTypeEnum->value => $courseTypeEnum->label()]);
    }

    public function label(): string
    {
        return ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString());
    }
}
