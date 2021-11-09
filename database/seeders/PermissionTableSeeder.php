<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin',
            'supplier',
            'customer',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete',
            'product-approve',
            'product-search',
            'supplier-create',
            'supplier-edit',
            'supplier-delete',
            'supplier-list',
            'category-create',
            'category-edit',
            'category-list',
            'category-delete',
            'user-create',
            'user-edit',
            'user-list',
            'user-delete',
            'user-disable',
            'user-ban',
            'user-report',
            'category-field-create',
            'category-field-edit',
            'category-field-list',
            'category-field-delete',
            'category-field-options-create',
            'category-field-options-edit',
            'category-field-options-list',
            'category-field-options-delete',
            'order-create',
            'order-list',
            'order-edit',
            'order-delete',
            'supplier-ban',
            'supplier-disable',
            'catalog-access',
            'cart-create',
            'cart-edit',
            'cart-list',
            'cart-delete',
            'cart-checkout',
            'quotation-create',
            'quotation-edit',
            'quotation-list',
            'quotation-delete',
            'invoice-create',
            'invoice-edit',
            'invoice-list',
            'invoice-delete',
            'email-send',
        ];

        foreach($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }

    
}
