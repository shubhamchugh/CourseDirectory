<?php

namespace App\Enums;

use Illuminate\Support\Collection;

enum PublishStatusEnum: string
{
    case DRAFT = 'draft';

    case PENDING_REVIEW = 'pending_review';

    case PUBLISHED = 'published';

    case SCHEDULED = 'scheduled';

    case REJECTED = 'rejected';

    public static function getSelectOptions(): Collection
    {
        return collect(PublishStatusEnum::cases())
            ->mapWithKeys(fn(PublishStatusEnum $publishStatusEnum) => [$publishStatusEnum->value => $publishStatusEnum->label()]);
    }

    public static function getScheduledOptions(): Collection
    {
        $collection = collect(PublishStatusEnum::cases())
            ->mapWithKeys(callback: fn(PublishStatusEnum $publishStatusEnum) => [$publishStatusEnum->value => $publishStatusEnum->label()]);
        return $collection->forget(keys: ['published', 'pending_review', 'draft', 'rejected']);

    }

    public static function getPublishedOptions(): Collection
    {
        $collection = collect(PublishStatusEnum::cases())
            ->mapWithKeys(fn(PublishStatusEnum $publishStatusEnum) => [$publishStatusEnum->value => $publishStatusEnum->label()]);

        return $collection->forget(keys: 'scheduled');
    }

    public function label(): string
    {
        return match ($this) {
            self::PUBLISHED => 'Publish',
            default => ucwords(string: str(string: $this->value)->replace(search: '_', replace: ' ')->toString()),
        };
    }
}
