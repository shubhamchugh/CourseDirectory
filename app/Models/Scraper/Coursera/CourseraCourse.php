<?php

namespace App\Models\Scraper\Coursera;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseraCourse extends Model
{
    use HasFactory;

    protected $connection = 'mysql_scraper';

    protected $guarded = ['id'];

    protected $casts = [
        'content' => 'array',
        'review_star_1' => 'array',
        'review_star_2' => 'array',
        'review_star_3' => 'array',
        'review_star_4' => 'array',
        'review_star_5' => 'array',
    ];
}
