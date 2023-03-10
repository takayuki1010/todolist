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
        Folder::create([
            'title' => '仕事関係',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);

        Folder::create([
            'title' => '趣味',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);

        Folder::create([
            'title' => '休日',
            'created_at' => Now(),
            'updated_at' => Now(),
        ]);
    }
}
