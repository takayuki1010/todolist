<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = DB::table('user')->first();

        $titles = ['仕事関係', '趣味', '休日'];

        foreach($titles as $title)
        {
            DB::table('folders')->insert([
                'title' => $title,
                'user_id' => $user->id,
                'created_at' => Now(),
                'updated_at' => Now(),
            ]);
        }


    }
}
