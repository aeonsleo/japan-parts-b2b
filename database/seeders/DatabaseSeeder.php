<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            CountrySeeder::class,
            PermissionTableSeeder::class,
            CreateAdminUserSeeder::class,
            CreateCustomerUserSeeder::class,
            CreateSupplierSeeder::class,
        ]);
    }
}
