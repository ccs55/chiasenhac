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
                'name' => "admin",
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
                'level' => 1,
            ],            
        ];
        DB::table('users')->insert($data);
    }
    
}
