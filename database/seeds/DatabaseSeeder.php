<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Vu Van Khai',
            'password' => Hash::make('123456'),
            'email' => 'khaihoan250382@gmail.com',
        ]);

        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
