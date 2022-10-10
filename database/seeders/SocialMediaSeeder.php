<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_media')->insert([
            [
                'name'       =>  'فيس بوك',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'انستجرام',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'تويتر',
                'active' => true,
                'created_at' => now(),

            ],
            [
                'name'       =>  'لنكدان',
                'active' => true,
                'created_at' => now(),
            ],

        ]);
    }
}
