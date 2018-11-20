<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 50)->create()
            ->each(function($product) {
            $product->reviews()->saveMany(factory(\App\Review::class, rand(0, 5))
                ->create(['product_id' => $product->id]));

        });
    }
}
