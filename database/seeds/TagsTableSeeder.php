<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('tags')->insert([
            ['name' => 'Giải Trí'],
            ['name' => 'Giáo Dục'],
            ['name' => 'Thể Thao'],
        ]);
    }


}
