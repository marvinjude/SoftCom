<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(SoftwareCategoriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(SoftwaresTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
       
    }
}
