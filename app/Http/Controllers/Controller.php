<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function index () {
        return view('index', [
            'slider' => \App\Models\Property::just(3),
            'categories' => \App\Models\Property::categories(),
            'latest' => \App\Models\Property::just(6),
            'agents' => \App\Models\Agent::all(),
            'reviews' => \App\Models\Review::all(),
            'articles' => \App\Models\Article::all()->take(3),
        ]);
    }
}
