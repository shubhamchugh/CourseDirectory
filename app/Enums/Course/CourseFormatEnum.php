<?php

namespace App\Enums\Course;

use Illuminate\Support\Collection;

enum CourseFormatEnum: string
{
    case VIDEO = 'video';

    case AUDIO = 'audio';

    case LIVE = 'live';

    case TEXT = 'text';

    case INTERACTIVE = 'interactive';

    case OFFLINE = 'offline';

    case HYBRID = 'hybrid';

    public static function getSelectOptions(): Collection
    {
        return collect(CourseFormatEnum::cases())
            ->mapWithKeys(callback: fn (CourseFormatEnum $courseFormatEnum) => [$courseFormatEnum->value => $courseFormatEnum->label()]);
    }

    public function label(): string
    {
        return ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString());
    }
}
