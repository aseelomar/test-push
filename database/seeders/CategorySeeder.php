<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run()
    {
       DB::table('categories')->insert([
           [
               'name'       =>  'الأخبار',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'انشطة ',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ], [
               'name'       =>  'فعاليات ',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'إعلانات ',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'عطاءات',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'معرض الصور',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'معرض الفيديوهات',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'خطة الاستراتيجية و التشغيلية',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'التقارير الادارية والمالية',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
           [
               'name'       =>  'هيكلية البلدية',
               'user_id'    =>  '1',
               'active' => true,
               'created_at' => now(),
               'updated_at' => now()
           ],
       ]);
    }
}
