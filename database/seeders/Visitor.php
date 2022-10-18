<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Visitor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Visitor',
            'email' => 'visitor@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'Visitor',
        ]);
    }
}
