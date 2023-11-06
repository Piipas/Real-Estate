<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Agent;
use App\Models\Review;
use App\Models\Article;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function show(Property $property) {
        return view('properties.show', [
            'property' => $property,
            'pictures' => $property->pictures()->orderBy('main', 'desc')->get(),
            'nearby' => $property->just(2),
            'categories' => Property::categories
        ]);
    }

    public function archive() {
        return view('properties.archive', [
            'properties' => Property::latest()->filter(request(['query', 'category']))->paginate(4),
            'categories' => Property::categories
        ]);
    }

    public function search() {

    }
}
