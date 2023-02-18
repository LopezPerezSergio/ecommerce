<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            /* Calzado */
            [
                'category_id' => 1,
                'name' => 'Damas',
                'slug' => Str::slug('Damas'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Caballeros',
                'slug' => Str::slug('Caballeros'),
                'color' => true,
                'size' => true,
            ],
            /* Playeras y Camisas */
            [
                'category_id' => 2,
                'name' => 'Playeras V',
                'slug' => Str::slug('Playeras V'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Cuello Redondo',
                'slug' => Str::slug('Cuello Redondo'),
                'color' => true,
                'size' => true,
            ],
            /* Pantalones */
            [
                'category_id' => 3,
                'name' => 'Skinny',
                'slug' => Str::slug('Skinny'),
                'size' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Carrot',
                'slug' => Str::slug('Carrot'),
                'size' => true,
            ],
            /* Accesorios */
            [
                'category_id' => 4,
                'name' => 'Gorras y Gorros',
                'slug' => Str::slug('Gorras y Gorros'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Carteras y Monederos',
                'slug' => Str::slug('Carteras y Monederos'),
            ],
            [
                'category_id' => 4,
                'name' => 'Mochilas',
                'slug' => Str::slug('Mochilas'),
                'color' => true,
            ],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::factory()->create($subcategory);
        }
    }
}
