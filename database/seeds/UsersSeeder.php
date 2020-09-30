<?php

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
            'id_role' => '1',
            'id_account' => '1',
            'name' => 'Admin',
            'email' => 'augustoalvarez05@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
