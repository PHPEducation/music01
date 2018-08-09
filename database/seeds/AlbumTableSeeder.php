<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            [
                'name' => 'Nhac bai hat KPOP 2018',
                'content' => 'Nhung bai hat han quoc hay nhat 2018',
                'view' => '100',
                'status' => 'Nghe nhieu nhat',
                'image' => '1.jpg',
                'category_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Maroon 5',
                'content' => 'Nhung ban hat hay cua Maroon 5',
                'view' => '50',
                'image' => '1.jpg',
                'status' => 'Moi nhat',
                'category_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Tinh ca buon 2',
                'content' => 'Nhung ban nhac buon.',
                'view' => '0',
                'image' => '1.jpg',
                'status' => 'Moi nhat',
                'category_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
