<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ["title", "location", "latitude", "longitude", "price", "bedroom", "bath", "kitchen", "description", "video", "air_condition", "belcony", "gym", "garden", "cctv", "children_play_ground", "community_center", "security_system"];

    const types = ["Villa", "Appartment", "Duplex", "Townhouse", "Single-family home", "Commercial property", "Bungalow"];
}
