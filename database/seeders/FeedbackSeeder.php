<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i <10; $i++)
        DB::table('feedback')->insert([
            "fullname"=>$faker->name,
            "phone"=>$faker->phoneNumber,
            "email"=>$faker->email,
            "title"=>$faker->title,
            "content"=>$faker->paragraph,
            "status"=>random_int(0, 1),
        ]);

    }
}
