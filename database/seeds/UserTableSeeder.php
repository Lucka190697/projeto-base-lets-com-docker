<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use App\Repositories\UserRepository;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser();
        $this->createAdmin();
    }

    private function createUser()
    {
        $user = User::create([
            'name' => 'Cliente',
            'email' => 'client@email.com',
            'password' => Hash::make('123456'),
        ]);

        $user->assignRole(\App\Enums\UserRolesEnum::CLIENT);
    }

    private function createAdmin()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('123456'),
        ]);

        $user->assignRole(\App\Enums\UserRolesEnum::ADMIN);
    }
}
