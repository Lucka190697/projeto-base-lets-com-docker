<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Enums\UserRolesEnum;

class RolesTableSeeder extends Seeder
{
    private $roles = [UserRolesEnum::ADMIN, UserRolesEnum::CLIENT];

    /**
     * Run the seed.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->roles as $role) {
            $role = Role::firstOrCreate([
                'name' => $role,
                'guard_name' => 'web',
            ]);

            $all_permissions = Permission::all();
            $role->syncPermissions($all_permissions);
        }
    }
}
