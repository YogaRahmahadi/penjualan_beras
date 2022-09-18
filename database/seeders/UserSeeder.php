<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin1',
                'name' => 'Ferdiansyah',
                'email' => 'ferdi@admin.com',
                'no_hp' => '085856004598',
                'password' => Hash::make('admin1'),
                'role' => 'admin',
            ],
            [
                'username' => 'admin2',
                'name' => 'Yoga',
                'email' => 'yoga@admin.com',
                'no_hp' => '082232283925',
                'password' => Hash::make('admin2'),
                'role' => 'admin',
            ],
            [
                'username' => 'test',
                'name' => 'testname',
                'email' => 'test@pelanggan.com',
                'no_hp' => '08123456789',
                'password' => Hash::make('test123'),
                'role' => 'pelanggan',
            ],
        ];

        DB::table('users')->insert($user);
    }
}