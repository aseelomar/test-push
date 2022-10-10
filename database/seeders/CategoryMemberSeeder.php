<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_members')->insert([
            [
                'name'       =>  'رئيس البلدية',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'نائب الرئيس',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'أمين السر',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'عضو مجلس بلدي',
                'active' => true,
                'created_at' => now(),
            ],

        ]);
    }
}
