<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->insert([
            [
                'name' => 'SNSD',
                'information' => 'SNSD la viet tat cua Girl is Generation',
                'national' => 'Han Quoc',
                'image' => '1.jpg',
                'view' => '40',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'BigBang',
                'information' => 'BigBang co nghia la vu no lon,voi 5 thanh vien.',
                'national' => 'Han Quoc',
                'image' => '1.jpg',
                'view' => '30',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Maroon5',
                'information'=> 'Maroon5 tung gianh duoc 3 giai Grammy cung voi 5 de cu khac.',
                'national' => 'Los Angeles,California,My',
                'image' => '1.jpg',
                'view' => '50',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
