<?php

namespace App\Models\Scraper\Edx;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EdxCourse extends Model
{
    use HasFactory;

    protected $connection = 'mysql_scraper';

    protected $guarded = ['id'];

    protected $casts = [
        'content' => 'array',
    ];
}
