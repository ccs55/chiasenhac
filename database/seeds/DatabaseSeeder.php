<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       
         $data = [
            [
                'email' => '+',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'lxc@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('users')->insert($data);
    }
    
}
