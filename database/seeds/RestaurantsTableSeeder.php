<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\User;
use Faker\Generator as Faker;



class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();



        foreach ($users as $user) {
            //crea nuova istanza


            $newRestaurant = new Restaurant();

            //set dati colonne
            $newRestaurant->user_id = $user->id;
            $newRestaurant->name = $faker->randomElement(['Raggio Verde','La Capannina','La Cantinetta','Osteria del Capitano','Pechino','Nagoya','La Vaca Loca','Fratelli La Bufala','Pizza Bike', 'American Graffiti', 'American Dinner']);
            $newRestaurant->address = $faker->address();
            $newRestaurant->p_iva = $faker->unique()->regexify('[0-9]{11}');
            $newRestaurant->phone = $faker->unique()->phoneNumber();

            $newRestaurant->save();

        }
    }
}
