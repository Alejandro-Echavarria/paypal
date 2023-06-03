<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\PaymentPlatform;

class PlanController extends Controller
{
    public function index()
    {
        return Inertia::render('Plans/Index', [
            'activeSubscriptions' => optional(auth()->user())->hasActiveSubscriptions ?? false
        ]);
    }
}
