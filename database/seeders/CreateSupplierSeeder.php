<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Country;
use App\Models\Supplier;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class CreateSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Supplier Joe',
            'email' => 'joesupp@jpb2b.com',
            'status' => User::VERIFIED,
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('password')
        ]);

        $supplier = Supplier::create([
            'company_name' => 'Dieselwork',
            'business_id' => 'B13415',
            'phone' => '325262626',
            'contact_person_name' => 'Joe Samuels',
            'user_id' => $user->id,
        ]);

        $country = Country::where('country_name', 'Italy')->first();

        Address::create([
            'address_line_1' => 'A1 Block T',
            'address_line_2' => 'First street',
            'phone' => '325262626',
            'city' => 'Milan',
            'country_id' => $country->id,
            'zip' => '50020',
            'user_id' => $user->id,
        ]);

        $role = Role::where(['name' => 'Supplier'])->first();

        $user->assignRole([$role->id]);

    }
}
