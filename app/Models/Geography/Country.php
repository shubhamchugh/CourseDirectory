<?php

namespace App\Models\Geography;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'sub_region_id', 'name', 'iso3', 'iso2', 'numeric_code', 'phone_code', 'capital', 'currency', 'currency_name', 'currency_symbol', 'tld', 'native', 'region', 'subregion', 'nationality', 'latitude', 'longitude', 'emoji', 'emojiU', 'timezones', 'translations'];

    protected $casts = [
        'translations' => 'array',
        'timezones' => 'array',
    ];
}
