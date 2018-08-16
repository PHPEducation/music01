<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => str_random(5),
                'email' => str_random(5) . '@gmail.com',
                'password' => str_random(5),
                'image' => '1.jpg',
                'role_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),                    
            ],
            [
                'username' =>str_random(5),
                'email' =>str_random(5) . '@gmail.com',
                'password' => str_random(5),
                'image' => '1.jpg',
                'role_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'username' => str_random(5),
                'email' => str_random(5) . '@gmail.com',
                'password' => str_random(5),
                'image' => '1.jpg',
                'role_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
