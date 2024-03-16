<?php

namespace App\Traits\Models;

use App\Enums\PublishStatusEnum;
use Illuminate\Database\Eloquent\Builder;

trait HasPublishable
{
    public function scopePublished(Builder $query): void
    {
        $query->where('status', PublishStatusEnum::PUBLISHED->value)
            ->where('published_at', '<=', now());
    }

    public function scopeDraft(Builder $query): void
    {
        $query->where('status', PublishStatusEnum::DRAFT->value);
    }

    public function scopeScheduled(Builder $query): void
    {
        $query->where('status', PublishStatusEnum::PUBLISHED->value)
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured(Builder $query): void
    {
        $query->where('is_featured', true);
    }

    public function scopeNotFeatured(Builder $query): void
    {
        $query->where('is_featured', true);
    }
}
