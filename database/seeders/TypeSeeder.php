<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['Front-end','Back-end','Fullstack-dev'];

        foreach ($types as $type ) {
            $newType = new Type();
            $newType->type = $type;
            $newType->save();
        }
    }
}
