<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Calzado',
                'slug' => Str::slug('Calzado'),
                'icon' => '<i class="fa-sharp fa-solid fa-boot"></i>'
            ],
            [
                'name' => 'Playeras',
                'slug' => Str::slug('Playeras'),
                'icon' => '<i class="fa-sharp fa-solid fa-shirt"></i>'
            ],
            [
                'name' => 'Pantalones',
                'slug' => Str::slug('Pantalones'),
                'icon' => '<i class="fa-sharp fa-solid fa-clothes-hanger"></i>'
            ],
            [
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
                'icon' => '<i class="fa-sharp fa-solid fa-shirt-long-sleeve"></i>'
            ]
        ];

        foreach ($categories as $category) {
            $cat = Category::factory()->create($category);

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($cat);
            }
        }
    }
}
