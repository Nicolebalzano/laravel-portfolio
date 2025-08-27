<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
       for($i=0; $i<10; $i++){
        $newProject = new Project();

        $newProject->nome = $faker->sentence();
        $newProject->cliente = $faker->name();
        $newProject->periodo = $faker->date();
        $newProject->riassunto = $faker->paragraphs(3, true);
        $newProject->save();
       }
    }
}
