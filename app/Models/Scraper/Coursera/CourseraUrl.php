<?php

namespace App\Models\Scraper\Coursera;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseraUrl extends Model
{
    use HasFactory;

    protected $connection = 'mysql_scraper';

    protected $guarded = ['id'];
}
