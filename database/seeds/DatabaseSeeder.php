<?php

use Illuminate\Database\Seeder;
use App\Models\Code;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        
        $this->call([
            LevelsSeeder::class,
            CodeSeeder::class,
            SubjectsSeeder::class,
        ]);
        
    }
}
