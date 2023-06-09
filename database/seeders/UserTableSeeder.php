<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superoot = User::create([
            'name' => "Nabil",
            'email' => 'nabil@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $superoot->assignRole('superoot');

        $engineer = User::create([
            'name' => "Handrian WU",
            'email' => 'han@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $engineer->assignRole('engineer');

        $director1 = User::create([
            'name' => "Mohammad Fazrie",
            'email' => 'fazri@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $director2 = User::create([
                'name' => "Adi Syafitra",
                'email' => 'adi@activ.co.id',
                'password' => bcrypt('password')
            ]);
        $director1->assignRole('director');
        $director2->assignRole('director');

        $sales1 = User::create( [
            'name' => "Meyke Safira",
            'email' => 'meyke@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $sales2 = User::create( [
            'name' => "Didik Yulianto",
            'email' => 'didik@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $sales3 = User::create( [
            'name' => "Dhea Ayu Ningtiyas",
            'email' => 'dhea@activ.co.id',
            'password' => bcrypt('password')
        ]);
        $sales1->assignRole('sales');
        $sales2->assignRole('sales');
        $sales3->assignRole('sales');


    }
}
