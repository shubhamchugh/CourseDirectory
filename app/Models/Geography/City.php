<?php

namespace App\Models\Geography;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'state_id', 'name', 'country_code', 'country_name', 'state_name', 'state_code', 'latitude', 'longitude', 'wikiDataId'];
}
