<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $furniture_category = \App\Models\Category::factory()->create(['title'=>'Furniture']);
        $car_category = \App\Models\Category::factory()->create(['title'=>'Car']);
        $electronics_category = \App\Models\Category::factory()->create(['title'=>'Electronics']);

        \App\Models\Listing::factory(10)->create(['category_id'=>$furniture_category->id]);
        \App\Models\Listing::factory(10)->create(['category_id'=>$car_category->id]);
        \App\Models\Listing::factory(10)->create(['category_id'=>$electronics_category->id]);
    }
}
