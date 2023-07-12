<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorities = config('permission.authorities');

        $listPermision = [];
        $superootPermissions = [];
        $directorPermissions = [];
        $engineerPermissions = [];
        $salesPermissions = [];

        foreach ($authorities as $label => $permissions) {
            foreach ($permissions as $permission) {
                $listPermision[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ];
                //Superoot
                $superootPermissions[] = $permission;
                //director
                if (in_array($label, ['manage_rent_histories', 'manage_preorders'])) {
                    $directorPermissions[] = $permission;
                }
                //engineer
                if (in_array($label, ['manage_rent_histories'])) {
                    $engineerPermissions[] = $permission;
                }
                //sales
                if (in_array($label, ['manage_bookings'])) {
                    $salesPermissions[] = $permission;
                }
            }
        }

        //Insert Data Permissions
        Permission::insert($listPermision);

        //Insert Data Roles
        //SuperAdmin
        $superoot = Role::create([
            'name' => "superoot",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        //director
        $director = Role::create([
            'name' => "director",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        //engineer
        $engineer = Role::create([
            'name' => "engineer",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        $sales = Role::create([
            'name' => "sales",
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        //Role Permission
        $superoot->givePermissionTo($superootPermissions);
        $director->givePermissionTo($directorPermissions);
        $engineer->givePermissionTo($engineerPermissions);
        $sales->givePermissionTo($salesPermissions);

        User::find(1)->assignRole("superoot");
        User::find(2)->assignRole("engineer");
        User::find(3)->assignRole("director");
        User::find(4)->assignRole("director");
        User::find(5)->assignRole("sales");
        User::find(6)->assignRole("sales");
        User::find(7)->assignRole("sales");
    }
}
