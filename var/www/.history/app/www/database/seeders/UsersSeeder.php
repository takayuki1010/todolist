<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'name' => 'テスト',
                'email' => 'test.test@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
