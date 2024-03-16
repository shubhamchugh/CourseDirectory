<?php

namespace App\Models\Course;

use App\Models\Geography\Language;
use App\Models\Partner\Institution;
use App\Models\Partner\Platform;
use App\Models\Partner\University;
use App\Models\User;
use App\Traits\Models\HasPublishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory,HasPublishable,SoftDeletes;

    protected $guarded = ['id'];

    /**
     * Get the user that owns the
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Course languages relationship
    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'course_languages');
    }

    // Course captions relationship
    public function captions(): BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'course_captions');
    }

    public function courseType(): BelongsTo
    {
        return $this->belongsTo(CourseType::class);
    }

    public function university(): BelongsTo
    {
        return $this->belongsTo(University::class);
    }

    public function institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class);
    }

    public function platform(): BelongsTo
    {
        return $this->belongsTo(Platform::class);
    }

    public function instructor(): BelongsToMany
    {
        return $this->belongsToMany(Instructor::class, 'course_instructors');
    }

    /**
     * Get the reviews for the course.
     */
    public function reviews()
    {
        return $this->hasMany(CourseReview::class);
    }
}
