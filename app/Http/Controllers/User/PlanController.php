<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $yearly = Plan::where('type', 'Yearly')->get();
        $monthly = Plan::where('type', 'Monthly')->get();
        return view('front.plan.plans', compact('monthly', 'yearly'));
    }

    public function payment(Request $request)
    {
        $request->validate([
            'card_number' => 'required',
            'expire'      => 'required',
            'cvv'         => 'required',
        ]);

        dd($request->all());
    }
}
