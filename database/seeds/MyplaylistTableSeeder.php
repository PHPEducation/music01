<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MyplaylistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('myplaylist')->insert([
            [
                'name' => str_random(5),
                'image' => '1.jpg',
                'content' => 'My album.',
                'user_id' => 1,
                'media_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => str_random(5),
                'image' => '1.jpg',
                'content' => 'Nhung bai hat hay!',
                'user_id' => 2,
                'media_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => str_random(5),
                'image' => '1.jpg',
                'content' => 'My album.',
                'user_id' => 2,
                'media_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
