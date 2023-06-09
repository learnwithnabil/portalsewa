<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'superoot']);
        Role::create(['name' => 'director']);
        Role::create(['name' => 'engineer']);
        Role::create(['name' => 'sales']);
        Role::create(['name' => 'customer']);
    }
}
