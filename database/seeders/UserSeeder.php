<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (\App\Models\User::count() == 0) {
            // \App\Models\User::factory(1)->create();

            \App\Models\User::insert([
                [
                  'name' => 'Younes',
                  'username' => "younes",
                  'password' => Hash::make('younes'),
                ]
            ]);
        }
    }
}
