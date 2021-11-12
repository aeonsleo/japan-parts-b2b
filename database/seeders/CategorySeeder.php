<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Filters', 'Lubricants', 'Sealants', 'Drives'
        ];

        foreach($categories as $cat) {
            $name = strtolower($cat);
            $name2 = explode(' ', $name);
            $slug = implode('-', $name2);
    
            $category = Category::create([
                'name' => $name,
                'label' => ucwords($name),
                'slug' => $slug,
            ]);
        }
    }
}
