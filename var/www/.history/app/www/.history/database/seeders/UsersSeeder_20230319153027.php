<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'password' => Hash::make('111111'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
