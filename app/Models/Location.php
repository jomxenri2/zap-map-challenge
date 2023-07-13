<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
    ];

    // Query scope for locations
    public function scopeWithinRadius($query, $latitude, $longitude, $radius)
    {
        // Based on my research, the value 6371 is commonly used as the average radius of the Earth in kilometers. 
        // It is used in the Haversine formula to calculate distances between coordinates based on their latitude and longitude.
        $haversine = "(6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians(longitude) - radians($longitude)) + sin(radians($latitude)) * sin(radians(latitude))))";

        return $query->select('*')
            ->selectRaw("{$haversine} AS distance")
            ->whereRaw("{$haversine} < ?", [$radius]);
    }
}
