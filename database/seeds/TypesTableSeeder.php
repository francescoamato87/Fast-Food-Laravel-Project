<?php

use Illuminate\Database\Seeder;
use App\Type;
use Faker\Generator as Faker;


class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'italiana', 'cinese', 'giapponese', 'vegetariana', 'vegana', 'pizzeria', 'fastfood', 'pesce', 'carne', 'pasticceria'];

        foreach($types as $type) {
            $newTypes = new Type();

            $newTypes->type = $type;

            $newTypes->save();
        }
    }
}
