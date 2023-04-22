<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Canosoft Admin',
            'slug' => 'canosoft-admin',
            'email' => 'info@canosoft.com',
            'user_type' => 'admin',
            'status' => 1,
            'password' => Hash::make('everest@123'),
        ]);
    }
}
