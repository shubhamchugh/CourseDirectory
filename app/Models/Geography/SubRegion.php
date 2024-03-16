<?php

namespace App\Models\Geography;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRegion extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'region_id', 'name', 'wikiDataId', 'translations'];

    protected $casts = [
        'translations' => 'array',
    ];
}
