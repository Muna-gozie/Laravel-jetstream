<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'Administrator']);
        $permission = Permission::create(['name' => 'manage_tasks']);
        $permission->assignRole($adminRole);

        $admin_user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('Admin')
        ]);
        $admin_user->assignRole('Administrator');
    }
}
