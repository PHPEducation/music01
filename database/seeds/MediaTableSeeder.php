<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias')->insert([
            [
                'name' => 'Dung hoi em',
                'content' => 'Dung hoi em vi sao tinh yeu ta ua mau',
                'mp3_video' => 'culac.mp3',
                'view' => '75',
                'image' => '1.jpg',
                'status' => 'Nghe nhieu nhat',
                'link' => 'abc',
                'singer_id' => 1,
                'category_id' => 1,
                'type_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'I love you ',
                'content' => 'Dang cap nhat',
                'mp3_video' => 'culac.mp3',
                'view' => '75',
                'image' => '1.jpg',
                'status' => 'Nghe nhieu nhat',
                'link'=>'abc',
                'singer_id' => 1,
                'category_id' => 2,
                'type_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Lost Stars',
                'content' => 'Please do not see',
                'mp3_video' => 'culac.mp3',
                'view' => '75',
                'image' => '1.jpg',
                'status' => 'Moi nhat',
                'link' => 'abc',
                'singer_id' => 1,
                'category_id' => 3,
                'type_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Dung nhu thoi quen',
                'content' => 'Dang cap nhat',
                'mp3_video' => 'bunny.mp4',
                'view' => '75',
                'image' => '1.jpg',
                'status' => 'Moi nhat',
                'link' => 'abc',
                'singer_id' => 1,
                'category_id' => 1,
                'type_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Girls Like You',
                'content' => 'Spent 24 hours, I need more hours with you',
                'mp3_video' => 'bunny.mp4',
                'view' => '75',
                'image' => '1.jpg',
                'status' => 'Nghe nhieu nhat',
                'link' => 'abc',
                'singer_id' => 1,
                'category_id' => 1,
                'type_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
