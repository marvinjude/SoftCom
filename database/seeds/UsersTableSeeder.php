<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\User::class, 10)->create();
       
       //Creates a Static User and Administrator
       User::create([
           'email'=> 'admin@tasued.edu.ng',
           'password' => Hash::make('password'),
           'admin' => '1',
           'company_name'=> "Agro Media",
           'website'=> "website.com.ng"
        ]);

        User::create([
           'email'=> 'user@tasued.edu.ng',
           'password' => Hash::make('password'),
           'admin' => '0',
           'company_name'=> "Agro Media",
           'website'=> "website.com.ng"
        ]);
    }
}
