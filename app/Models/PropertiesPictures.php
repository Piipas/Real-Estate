<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertiesPictures extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'property_id'];

    public function property() {
        $this->belongsTo(\App\Models\Property::class, 'property_id', 'property_id');
    }
}
