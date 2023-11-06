<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Property extends Model
{
    use HasFactory;

    protected $primaryKey = 'property_id';
    protected $fillable = ["title", "location", "latitude", "longitude", "price", "bedroom", "bath", "kitchen", "description", "video", "air_condition", "belcony", "gym", "garden", "cctv", "children_play_ground", "community_center", "security_system"];
    const categories = ["Villa", "Appartment", "Duplex", "Townhouse", "Single-family home", "Commercial property", "Bungalow"];

    public static function just($limit) {
        return self::all()->take($limit);
    }

    public static function categories() {
        return self::categories;
    }

    public function scopeFilter($query, array $filters) {
        if ($filters['query'] ?? false) {
            $query->where('title', 'like', '%'.request('query').'%')
            ->orWhere('description', 'like', '%'.request('query').'%');
        }

        if ($filters['category'] ?? false) {
            $query->where('type', '=', request('category'));
        }
    }

    public function pictures() {
        return $this->hasMany(\App\Models\PropertiesPictures::class, 'property_id', 'property_id');
    }
}
