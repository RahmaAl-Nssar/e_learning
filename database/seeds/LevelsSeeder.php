<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
           [ 'name' => 'الفرقة الأولى'],
           [ 'name' => 'الفرقة الثانية'],
           [ 'name' => 'الفرقة الثالثة'],
           [ 'name' => 'الفرقة الرابعة'],
           [ 'name' => 'الفرقة الخامسة'],
            
        ]);
    }
}