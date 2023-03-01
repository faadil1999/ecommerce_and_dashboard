<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory()
         ->has(
            Order::factory()
            ->count(3)
            ->hasAttached(
                Product::factory()->count(5),
                ['total_price' => rand(100,500) , 'total_quantity' => rand(1,3) ]

            )
         )
         ->create();

         Product::factory()->count(10);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
