<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tao 1 doi tuong faker
        $faker = Faker::create();
        for($i = 0; $i <10; $i++)
        DB::table('partner')->insert([
            "name"=>$faker->company,
            "phone"=>$faker->phoneNumber,
            "email"=>$faker->email,
            "website"=>$faker->domainName,
            "description"=>$faker->realText(200),
        ]);

    }
}
