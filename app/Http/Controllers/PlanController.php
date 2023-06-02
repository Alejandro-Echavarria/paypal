<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PlanController extends Controller
{
    public function index()
    {
        return Inertia::render('Plans/Index', [
            'plans' => auth()->user()->hasActiveSubscriptions,
        ]);
    }
}
