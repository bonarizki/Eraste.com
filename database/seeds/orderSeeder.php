<?php

use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = factory(\App\order::class, 10)->create();
        // factory(App\order::class, 50)->create()->each(function ($order) {
        //     $order->product()->save(factory(App\product::class)->make());
        // });
    }
}
