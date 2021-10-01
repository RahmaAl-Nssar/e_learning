<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
           [ 'name' => 'رياضيات','level_id'=>1],
           [ 'name' => 'علوم','level_id'=>2],
           [ 'name' => 'تركي','level_id'=>1],
           [ 'name' => 'برمجه','level_id'=>2],
           [ 'name' => 'لغة عربية','level_id'=>3],
           [ 'name' => 'لغة انجليزية','level_id'=>4],
           [ 'name' => 'لغة فرنسية','level_id'=>5],
            
        ]);
    }
}