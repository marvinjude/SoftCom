<?php

use Illuminate\Database\Seeder;

class SoftwareCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SoftwareCategory::class, 10)->create();
    }
}
