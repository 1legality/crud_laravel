<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '1legality',
            'email' => '1legality@test.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
