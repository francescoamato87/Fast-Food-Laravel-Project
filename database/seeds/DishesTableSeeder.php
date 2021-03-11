<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Restaurant;
use App\Dish;
use Faker\Generator as Faker;


class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $dishes = Dish::all();
        $restaurants = Restaurant::all();

        foreach ($restaurants as $restaurant) {
            $newDish = new Dish();

            for ($i = 0; $i < 3; $i++) {
                $newDish = new Dish();

                $newDish->restaurant_id = $restaurant->id;
                $newDish->name = $faker->randomElement(['Hamburger','Pesce Spada','Lasagna al Forno','Verdure Grigliate','Pasta all\'Amatriciana','Cotoletta alla Milanese','Hamburger di verdure','Involtini Primavera','Branzino all\'Isolana','Polpette al sugo']);
                $newDish->category=$faker->randomElement(['Antipasto', 'Primo','Secondo', 'Contorno']);
                $newDish->ingredients=$faker->word(10);
                $newDish->description=$faker->paragraphs(2, true);                
                $newDish->price = $faker->randomFloat(2, 0, 50);
                $newDish->gluten = $faker->boolean();
                $newDish->available = $faker->boolean();
                $newDish->slug = Str::slug($newDish->name, '-');

                $newDish->save();
            };
        }
    }
}
