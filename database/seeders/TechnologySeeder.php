<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = config('store.technologies');

        foreach($technologies as $technology) { 
            $newType = new Technology();
            $newType->name = $technology;
           
            $newType->save();
        }
    }
}
