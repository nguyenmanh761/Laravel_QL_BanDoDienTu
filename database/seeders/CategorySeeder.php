<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = array('TV', 'Điện thoại', "Đèn", "Quạt");
        foreach($cats as $cat)
        DB::table('category')->insert([
            'name'=>$cat,
            'parent_id'=>0,
            'feature'=>true,
        ]);
    }
}
