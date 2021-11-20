<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@jpb2b.com',
            'email_verified_at' => Carbon::now(),
            'status' => User::VERIFIED,
            'password' => bcrypt('password')
        ]);
        
        $role = Role::where(['name' => 'Admin'])->first();

        $user->assignRole([$role->id]);
    }
}
