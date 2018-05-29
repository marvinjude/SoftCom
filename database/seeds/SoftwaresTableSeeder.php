<?php

use Illuminate\Database\Seeder;

use App\Software;

class SoftwaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Software::class, 10)->create();
    }
}
