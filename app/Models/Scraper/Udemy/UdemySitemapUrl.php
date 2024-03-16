<?php

namespace App\Models\Scraper\Udemy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdemySitemapUrl extends Model
{
    use HasFactory;

    protected $connection = 'mysql_scraper';

    protected $guarded = ['id'];
}
