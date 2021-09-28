<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('codes')->insert([
            ['name' => '0001'],
            ['name' => '0002'],
            ['name' => '0003'],
            ['name' => '0004'],
            ['name' => '0005'],
            ['name' => '0006'],
            ['name' => '0007'],
            ['name' => '0008'],
            ['name' => '0009'],
            
        ]);
    }
}