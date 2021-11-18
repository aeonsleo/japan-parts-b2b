<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateCustomerUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'John Doe',
            'email' => 'john@jpb2b.com',
            'password' => bcrypt('password')
        ]);

        $user2 = User::create([
            'name' => 'Peter Jakes',
            'email' => 'peter@jpb2b.com',
            'password' => bcrypt('password')
        ]);
        
        $role = Role::where(['name' => 'Customer'])->first();

        $user1->assignRole([$role->id]);
        $user2->assignRole([$role->id]);
    }
}
