<?php

use Illuminate\Database\Seeder;

class ReviewTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Review::class, 25)->create();
    }


}
