<?php

use Illuminate\Database\Seeder;
use App\Order;
use Faker\Generator as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++ ) {
            $newOrder = new Order();

            $newOrder->client_name= $faker->name();
            $newOrder->client_lastname= $faker->lastName();
            $newOrder->client_address= $faker->address();
            $newOrder->client_phone= $faker->unique()->phoneNumber();
            $newOrder->tot_price=$faker->randomFloat(2,0,999);
            $newOrder->order_paid=$faker->boolean();

            $newOrder->save();
        }
    }
}
