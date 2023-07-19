<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = Type::all();

        

        for ($i=0; $i < 10; $i++) { 
            $project = new Project();
            $project->title = $faker->words(3,true);
            $project->content = $faker->text(300);
            $project->image = "uploads/image-placeholder.png";
            $project->type_id = rand(1,count($types));
            
            $project->save();
        }
    }
}
