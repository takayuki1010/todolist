<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('folders')->insert([
            'title' => '仕事関係',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);

        DB::table('folders')->insert([
            'title' => '趣味',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);

        DB::table('folders')->insert([
            'title' => '休日',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);
    }
}
