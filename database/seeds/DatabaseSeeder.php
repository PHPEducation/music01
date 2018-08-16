<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(TypeTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(BandTableSeeder::class);
        $this->call(SingerTableSeeder::class);
        $this->call(MediaTableSeeder::class);
        $this->call(AlbumTableSeeder::class);
        $this->call(DetailAlbumTableSeeder::class);
        $this->call(MyplaylistTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
