<?php

namespace App\Models\Scraper\Udemy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdemyCourse extends Model
{
    use HasFactory;

    protected $connection = 'mysql_scraper';

    protected $guarded = ['id'];

    protected $casts = [
        'price' => 'array',
        'reviews' => 'array',
        'component' => 'array',
        'content' => 'array',
    ];
}
