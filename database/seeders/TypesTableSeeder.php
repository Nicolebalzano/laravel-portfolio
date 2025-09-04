<?php

namespace Database\Seeders;
use App\Models\Type;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         $faker = Faker::create();
       $types = [
        'E-commerce',
        'Webapp',
        'Landing Page',
        'Sito Vetrina'
       ];
       foreach($types as $type){
        $newType = new Type();
        $newType->name= $type;
        $newType->description= $faker->sentence();

        $newType->save();
       }
    }
}
