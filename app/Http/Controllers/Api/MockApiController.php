<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing;
class MockApiController extends Controller
{
    /**
     * Return mock sample business ideas.
     */
    public function businessIdeas()
    {
        $ideas = [
            ['idea' => 'Subscription box for local handmade goods'],
            ['idea' => 'Remote worker wellness program platform'],
            ['idea' => 'On-demand compost pickup service'],
            ['idea' => 'AI-powered language learning buddy'],
            ['idea' => 'SaaS for small business financial forecasting'],
        ];

        return response()->json(['business_ideas' => $ideas]);
    }

    /**
     * Return mock AI-generated startup names.
     */
    public function startupNames(Request $request)
    {
        $category = $request->query('category');

        $names = collect([
            ['name' => 'NeuroNest', 'category' => 'Health AI'],
            ['name' => 'FinPilot', 'category' => 'Fintech'],
            ['name' => 'MarketMorph', 'category' => 'Marketing Tools'],
            ['name' => 'Greenlytics', 'category' => 'Sustainability Tech'],
            ['name' => 'AutoThink', 'category' => 'AI Automation'],
        ]);

        if ($category) {
            $names = $names->filter(fn($item) => strcasecmp($item['category'], $category) === 0)->values();
        }

        return response()->json(['startup_names' => $names]);
    }

    /**
     * Return mock user submissions or generated content.
     */
    public function userSubmissions()
    {
        $submissions = [
            ['user' => 'Jane Doe', 'submission' => 'AI-powered pet care assistant'],
            ['user' => 'John Smith', 'submission' => 'Marketplace for eco-friendly gadgets'],
            ['user' => 'Sara Bloom', 'submission' => 'Mental health journaling app'],
            ['user' => 'Mike Lin', 'submission' => 'Voice-controlled cooking assistant'],
        ];

        return response()->json(['submissions' => $submissions]);
    }
}
