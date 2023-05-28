<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);
        User::create([
            'name' => 'admin',
            'email' => 'khalidmusa249@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
            'role_id' => $adminRole->id
        ]);
    }
}
