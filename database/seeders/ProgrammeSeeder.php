<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Institution;
use App\Models\Programme;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::truncate();
        Programme::truncate();
        $faker = Factory::create();


        //create blogs
        $levels = ['hnd','bachelors', 'masters', 'phd'];
        $degrees = ['HND','BA', 'BBA', 'BTech', 'Beng', 'BSc', 'MA', 'MSc', 'MBA', 'MEd', 'MEng', 'MTech', 'PhD'];
        for ($i = 0; $i < 5; $i++) {
            for($j = 0; $j < count($levels); $j++) {
                for($k = 0; $k < count($degrees); $k++){
                    $firstStringCharacter = substr($degrees[$k], 0, 1);
                    if($firstStringCharacter == 'H'){
                        Programme::create([
                            'name'  => $faker->text(20),
                            'institution_id'   => rand(1, 200),
                            'level' => $levels[0],
                            'degree' => $degrees[$k],
                            'faculty' => $faker->text(20),
                            'department' => $faker->text(20),
                            
                        ]);

                    } elseif($firstStringCharacter == 'B'){
                        Programme::create([
                            'name'  => $faker->text(20),
                            'institution_id'   => rand(1, 200),
                            'level' => $levels[1],
                            'degree' => $degrees[$k],
                            'faculty' => $faker->text(20),
                            'department' => $faker->text(20),
                            
                        ]);
                    } elseif($firstStringCharacter == 'M'){
                        Programme::create([
                            'name'  => $faker->text(20),
                            'institution_id'   => rand(1, 200),
                            'level' => $levels[2],
                            'degree' => $degrees[$k],
                            'faculty' => $faker->text(20),
                            'department' => $faker->text(20),
                            
                        ]);
                    }
                    elseif($firstStringCharacter == 'P'){
                        Programme::create([
                            'name'  => $faker->text(20),
                            'institution_id'   => rand(1, 200),
                            'level' => $levels[3],
                            'degree' => $degrees[$k],
                            'faculty' => $faker->text(20),
                            'department' => $faker->text(20),
                            
                        ]);
                    }
                    
                }
             
            }
         
        }

        $this->command->info('Dummy programmes have been created!');
    }
}
