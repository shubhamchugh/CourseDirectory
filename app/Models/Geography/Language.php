<?php

namespace App\Models\Geography;

use App\Models\Course\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'type'];

    // Languages for courses
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_languages');
    }

    // Captions for courses
    public function captions()
    {
        return $this->belongsToMany(Course::class, 'course_captions');
    }
}
