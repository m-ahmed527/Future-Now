<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
         $users_count = User::all()->count();
         $subscribers = User::whereHas('subscriptions', function ($query) {
            $query->where('stripe_status', '=', 'active');
        })->count();

        $unsubscribers = User::whereDoesntHave('subscriptions')->count();
        $users = User::latest()->limit(4)->get();
        // dd($subscribers,$unsubscribedCount);
        return view('user.dashboard',compact('users_count','subscribers','unsubscribers','users'));
    }
}
