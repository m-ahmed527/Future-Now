<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            [
                'name' => 'Subscription Plan',
                'slug' => 'subscription-plan',
                'stripe_plan' => 'price_1OUwwKDuZ1C8Kw7Lk5qCj328',
                'price' => 10,
                'description' => 'Subscription Plan'
            ],

        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
