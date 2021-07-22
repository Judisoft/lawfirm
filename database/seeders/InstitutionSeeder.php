<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Institution;
use Faker\Factory;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Institution::truncate();
        $faker = Factory::create();
        $regions = ['NW', 'SW', 'CE', 'LT', 'AD', 'FN', 'NG', 'WE', 'EA','SO',];

        //create institutions
        for ($i = 0; $i < count($regions); $i++) {
            for ($j = 0; $j < 50; $j++) {
                Institution::create([
                    'institution_name'  =>$faker->sentence(3),
                    'institution_type'   => 'higher',
                    'region' => $regions[$i],
                    'city' => $faker->text(10),
                    'website' => 'www.schoolname.com',
                    'logo' => $faker->image('public/uploads/blog/', 640, 480, null, false),
                    'registration_fee' => '10000',
                    'email' => $faker->unique()->email,
                    'telephone' => rand(676483748,676483760),
                    'om' => rand(696483748,696483760),
                    'momo' => rand(676483748,676483760),
                    'bank_account' => rand(67648374854637888,676483748546378100),
                    'image' => $faker->image('public/uploads/blog/', 640, 480, null, false),
                ]);
            }
        }

        $this->command->info('Dummy institutions have been created!');
    }
}
