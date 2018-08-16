<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SingerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('singers')->insert(
            [
                'name' => 'My Tam',
                'realname' => 'Phan Thi My Tam',
                'national' => 'Da Nang,Viet Nam',
                'birth' => date('2018-09-10'),
                'life' => 'Thang 4/1998, My Tam doat giai nhat hoi thi don ca quan Tan Binh va quan 6.',
                'sex' => 'Nu',
                'view' => '100',
                'image' => '1.jpg',
                'band_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]),
        ]);
    }
}
