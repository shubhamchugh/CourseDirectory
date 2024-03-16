<?php

namespace App\Enums\Course;

use Illuminate\Support\Collection;

enum CourseTypeEnum: string
{
    case ON_DEMAND = 'on_demand';

    case PRE_RECORDED = 'pre_recorded';

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
