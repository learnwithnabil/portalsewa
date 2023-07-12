<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Nabil",
                'email' => 'nabil@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Handrian WU",
                'email' => 'han@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Mohammad Fazrie",
                'email' => 'fazri@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Adi Syafitra",
                'email' => 'adi@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Meyke Safira",
                'email' => 'meyke@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Didik Yulianto",
                'email' => 'didik@activ.co.id',
                'password' => bcrypt('password')
            ],
            [
                'name' => "Dhea Ayu Ningtiyas",
                'email' => 'dhea@activ.co.id',
                'password' => bcrypt('password')
            ]
        ]);

    }
}
