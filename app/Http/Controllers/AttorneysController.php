<?php

namespace App\Http\Controllers;

use App\Models\Attorney;

class AttorneysController extends Controller
{
    public function index()
    {
        $attorneys = Attorney::latest()->get();

        $valuesFor = function (string $field, array $defaults) use ($attorneys) {
            $savedValues = $attorneys
                ->pluck($field)
                ->flatMap(fn ($value) => explode(',', (string) $value))
                ->map(fn ($value) => trim($value))
                ->filter()
                ->values()
                ->all();

            return collect(array_merge($defaults, $savedValues))
                ->unique(fn ($value) => strtolower($value))
                ->sort()
                ->values();
        };

        return view('attorneys', [
            'attorneys' => $attorneys,
            'practiceFilters' => $valuesFor('practice', [
                'Commercial Transactions', 'Infrastructure & Projects', 'Procurement & Contracting',
                'Aviation', 'Commercial Risk', 'International Business',
            ]),
            'industryFilters' => $valuesFor('industry', [
                'Aviation', 'Energy & Infrastructure', 'Technology',
                'Healthcare & Life Sciences', 'Real Estate & Construction',
            ]),
        ]);
    }
}
