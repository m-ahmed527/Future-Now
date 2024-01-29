<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\PlanStoreRequest;
use App\Http\Requests\PlanUpdateRequest;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Cashier\Subscription;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        return view("user.subscription.sub-plan", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("user.subscription.subscription", compact("plan", "intent"));
    }

    public function create(){

        return view("user.plan.create");
    }

    public function store(PlanStoreRequest $request){
        // dd($request->sanitizedPackages(), $request->sanitizedPlan());
        $plan = Plan::create($request->sanitizedPlan());
        if($plan){
            foreach ($request->package as $key => $n) {
                $plan->packages()->create([
                    'name' => $n,
                ]);
            }
            return redirect()->route("plan.index");
        }

        return redirect()->back()->with('error','somehing went wrong');
    }

    public function edit(Plan $plan){
        return view("user.plan.edit", compact("plan"));
    }

    public function update(PlanUpdateRequest $request, Plan $plan){
        $plan->update($request->sanitizedPlan());
        if($plan){
            $plan->packages()->delete();
            foreach ($request->package as $key => $n) {
                $plan->packages()->create([
                    'name' => $n,
                ]);
            }
            return redirect()->route("plan.index");
        }

        return redirect()->back()->with('error','somehing went wrong');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);

        return view("user.subscription.subscription_success");
    }
    public function subscriptions(){
        // auth()->user()->subscription('1')->cancelNow();
        $users = User::whereHas('subscriptions')->latest()->paginate(5);
        // $subscriptions = Subscription::latest()->paginate(5);
        return view('user.subscription.index',compact('users'));
    }

    public function paymentLogs(){

        $subscriptions = Subscription::latest()->paginate(5);
        return view('user.payment-log',compact('subscriptions'));
    }
}
