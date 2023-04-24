<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++)
        DB::table('orders')->insert([
            'customer_id'=> random_int(2, 12),
            'status'=>random_int(0, 1),
            'description'=>Str::random(100),
        ]);
    }
}
