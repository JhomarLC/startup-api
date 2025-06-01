<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing;
class StartupNameController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $names = [
            ['name' => 'NeuroNest', 'category' => 'Health AI'],
            ['name' => 'FinPilot', 'category' => 'Fintech'],
            ['name' => 'MarketMorph', 'category' => 'Marketing Tools'],
            ['name' => 'Greenlytics', 'category' => 'Sustainability Tech'],
            ['name' => 'AutoThink', 'category' => 'AI Automation'],
        ];

        if ($category) {
            $filtered = array_filter($names, function ($startup) use ($category) {
                return strcasecmp($startup['category'], $category) === 0;
            });

            return response()->json(['startups' => array_values($filtered)]);
        }

        return response()->json(['startups' => $names]);
    }
}
